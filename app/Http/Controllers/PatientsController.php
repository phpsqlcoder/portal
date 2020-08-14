<?php

namespace App\Http\Controllers;

use App\Patients;
use App\Patient_files;
use App\Patient_details;
use App\Bookings;
use App\Http\Requests\PatientRequest;
use App\PatientAdditionalDetail;
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

    
    public function store(PatientRequest $request)
    {
		dd($request->validated());
		$request->user_id = Auth::id();
		
		$patient = 
		Patients::create([
			'fname' => $request->validated()['fname'],
			'lname' => $request->validated()['lname'],
			'mname' => $request->validated()['mname'],
			'extname' => $request->validated()['extname'],
			'gender' => $request->validated()['gender'],
			'birthdate' => $request->validated()['birthdate'],
			'address' => $request->validated()['address'],
			'contact_no' => $request->validated()['contact_no'],
			'civil_status' => $request->validated()['civil_status'],
			'occupation' => $request->validated()['occupation'],
			'referral' => $request->validated()['referral'],
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

		PatientAdditionalDetail::create([
			'patient_id' => $patient->id,
			'local_address' => $request->validated()['local_address'],
            'local_street_number' => $request->validated()['local_street_number'],
            'local_subdivision' => $request->validated()['local_subdivision'],
            'local_city' => $request->validated()['local_city'],
            'local_country' => $request->validated()['local_country'],
            'local_postal_code' => $request->validated()['local_postal_code'],
            'local_telephone_number' => $request->validated()['local_telephone_number'],
            'local_fax_number' => $request->validated()['local_fax_number'],
            'local_email' => $request->validated()['local_email'],
            'foreign_address' => $request->validated()['foreign_address'],
            'foreign_street_number' => $request->validated()['foreign_street_number'],
            'foreign_subdivision' => $request->validated()['foreign_subdivision'],
            'foreign_city' => $request->validated()['foreign_city'],
            'foreign_country' => $request->validated()['foreign_country'],
            'foreign_postal_code' => $request->validated()['foreign_postal_code'],
            'foreign_telephone_number' => $request->validated()['foreign_telephone_number'],
            'foreign_fax_number' => $request->validated()['foreign_fax_number'],
            'foreign_email' => $request->validated()['foreign_email'],
            'emergency_contact_person' => $request->validated()['emergency_contact_person'],
            'emergency_contact_number' => $request->validated()['emergency_contact_number'],
		]);

		return redirect('patients')->with([
			'message' => 'Patient successfully added to the list'
		]);
    }

    
    public function show($patient)
    {
		$patient = Patients::with(['info', 'patientAdditionalDetail', 'patientMedicalInformation'])->whereId($patient)->first();

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
