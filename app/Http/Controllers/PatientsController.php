<?php

namespace App\Http\Controllers;

use App\Patients;
use App\Patient_files;
use App\Patient_details;
use App\Bookings;
use Auth;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    
    public function index()
    {
		$patients = Patients::all();
		return view('patients.list',compact('patients'));
	}
	
	public function patients_today()
    {
		$bookings = Bookings::where('date','=',date('Y-m-d'))->get();
		//dd($bookings);
		return view('patients.list_today',compact('bookings'));
    }

    
    public function create()
    {
        return view('patients.add');
	}
	
	public function book($id)
    {
		
        $booked = Bookings::create([
			'patient_id' => $id,
			'date' => date('Y-m-d')
		]);

		return back();
    }

    
    public function store(Request $request)
    {
		$request->user_id = Auth::id();
		

		$patient = 
		Patients::create([
			'fname' => $request->fname,
			'lname' => $request->lname,
			'mname' => $request->mname,
			'extname' => $request->extname,
			'gender' => $request->gender,
			'birthdate' => $request->birthdate,
			'address' => $request->address,
			'contact_no' => $request->contact_no,
			'civil_status' => $request->civil_status,
			'occupation' => $request->occupation,
			'referral' => $request->referral,
			'images' => 'test',
			'user_id' => Auth::id()
		]);

		$images = $request->file('images');

		if($request->hasFile('images'))
		{
			foreach ($images as $file) {
				$file->store('upload/' . $patient->id . '/images');
			}
		}

		Patient_details::create([
			'patient_id' => $patient->id, 
			'pmh_hpn' => $request->pmh_hpn,
			'pmh_dm' => $request->pmh_dm,
			'pmh_ba' => $request->pmh_ba,
			'pmh_ca' => $request->pmh_ca,
			'pmh_heart_disease' => $request->pmh_heart_disease,
			'pmh_operation' => $request->pmh_operation,
			'psh_smoking' => $request->psh_smoking,
			'psh_alcohol' => $request->psh_alcohol,
			'fmh_similar_lesions' => $request->fmh_similar_lesions,
			'fmh_ca' => $request->fmh_ca,
			'allergy' => $request->allergy,
			'soap' => $request->soap,
			'shampoo' => $request->shampoo,
			'lotion' => $request->lotion,
			'perfume' => $request->perfume,
			'detergent' => $request->detergent,
			'fabric_softener' => $request->fabric_softener,
			'lmp' => $request->lmp,
			'pmp' => $request->pmp,
			'pregnant_plans' => $request->pregnant_plans,
			'user_id' => Auth::id()
		]);
    }

    
    public function show(Patients $patient)
    {
        return view('patients.profile',compact('patient'));
    }

    
    public function edit(Patients $patient)
    {
        //return view('patients.profile');
    }

    
    public function update(Request $request, Patients $patients)
    {
        //
    }

    
    public function destroy(Patients $patients)
    {
        //
    }

    public function files($id)
    {
        $files = Patient_files::where('patient_id',$id)->get();
        return view('patients.upload_files',compact('id','files'));
    }

    public function files_upload(Request $request)
    {
        for($x=1; $x<=$request->counter; $x++){

            $path = $request->file('fileToUpload'.$x)->store('upload/'.$request->patient_id);
            $insert = Patient_files::create([
                'description' => $request->filename[$x],
                'filename' => $path,
                'patient_id' => $request->patient_id
            ]);

        }

        return back();
    }
}
