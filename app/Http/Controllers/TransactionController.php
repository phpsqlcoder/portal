<?php

namespace App\Http\Controllers;

use App\transaction_header;
use App\transaction_detail;
use App\Products;
use App\Services;
use App\Patients;
use Illuminate\Http\Request;
use Auth;

class TransactionController extends Controller
{
    
    public function index()
    {
        //
	}
	
	public function list_all()
    {
		
		$transactions = transaction_header::orderBy('id','desc')->get();	
		
        return view('transaction.list',compact('transactions'));
    }

    
    public function list($patient)
    {       
		$transactions = transaction_header::where('patient_id',$patient)->orderBy('id','desc')->get();	
        return view('patients.transactions',compact('transactions','patient'));
	}

	public function medcert(transaction_header $id)
    {       
        return view('patients.medcert',compact('id'));
	}

	public function receipt(transaction_header $id)
    {       
		$inventory = transaction_detail::where('header_id',$id->id)->where('type','=','inventory')->get();	
		$services = transaction_detail::where('header_id',$id->id)->where('type','=','services')->get();
        return view('patients.receipt',compact('id','services','inventory'));
	}

	public function prescription(transaction_header $id)
    {       
		$details = transaction_detail::where('header_id',$id->id)->where('type','<>','service')->get();	
        return view('patients.prescription',compact('id','details'));
	}
	
	public function create(Patients $patient)
    {
        $services = Services::all();
        $services->toJson();
        $products = Products::all();
        $products->toJson();
        return view('transaction.create',compact('services','products','patient'));
    }

    
    public function store(Request $request)
    {
        $save = transaction_header::create([
			'patient_id' => $request->patient_id,
			'chief_complaint' => $request->chief_complaint,
			'diagnoses' => $request->diagnosis,
			'recommendation' => $request->recommendation,
			'remarks' => $request->remarks,
			'visit_date' => $request->date,
			'user_id' => Auth::id()
		]);

		$save_detail = $this->store_details($request,$save->id);		
		return redirect('/transaction/patient/list/'.$request->patient_id);;
	}
	
	public function store_details($request,$id)
    {
		$store_services = $this->store_details_services($request,$id);
		$store_products_inventor = $this->store_details_products_inventory($request,$id);
		$store_products_others = $this->store_details_products_others($request,$id);
	}
	
	public function store_details_services($request,$id)
    {
		for($x=1; $x<=$request->counter_s; $x++){
			if($request->service[$x]){
				$name = explode("|",$request->service[$x]);
				$store = transaction_detail::create([
					'header_id' => $id,
					'type' => 'service',
					'price' => $request->cost_s[$x],
					'name' => $name[0],
					'qty' => 1
				]);
			}			
		}
		
	}
	
	public function store_details_products_inventory($request,$id)
    {
		for($x=1; $x<=$request->counter_e; $x++){
			if($request->medicine[$x]){
				$name = explode("|",$request->medicine[$x]);
				$store = transaction_detail::create([
					'header_id' => $id,
					'type' => 'inventory',
					'price' => $request->cost[$x],
					'name' => $name[0],
					'qty' => $request->qty[$x],
					'total_days' => $request->days[$x],
					'when_to_apply' => $request->whenToTake[$x]
				]);
			}			
		}
	}
	
	public function store_details_products_others($request,$id)
    {
        for($x=1; $x<=$request->counter_o; $x++){
			if($request->medicine_o[$x]){
				$name = explode("|",$request->medicine_o[$x]);
				$store = transaction_detail::create([
					'header_id' => $id,
					'type' => 'other',
					'name' => $name[0],
					'qty' => $request->qty_o[$x],
					'total_days' => $request->days_o[$x],
					'when_to_apply' => $request->whenToTake_o[$x]
				]);
			}			
		}
    }


    
    public function show(transaction_header $transaction_header)
    {
        //
    }

    
    public function edit(transaction_header $transaction_header)
    {
        //
    }

    
    public function update(Request $request, transaction_header $transaction_header)
    {
        //
    }

    
    public function destroy(transaction_header $transaction_header)
    {
        //
    }
}
