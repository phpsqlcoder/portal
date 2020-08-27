<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Products;
use App\Issuances;
use App\IssuanceItems;

class IssuanceController extends Controller
{
    
    public function index()
    {
    	$data = Issuances::all(); 
        return view('issuances.index',compact('data'));
	}

	public function create()
	{
		$items = Products::all();

		return view('issuances.create',compact('items'));
	}

	public function store(Request $req)
	{
		$data = Issuances::create([
			'issuance_date' => $req->issuance_date,
			'type' => $req->type,
			'status' => $req->status,
			'purpose' => $req->purpose
		]);

		if($data){
			$reqdata  = $req->all();
			$itemid   = $reqdata['itemid'];
			$itemcost = $reqdata['cost'];
			$itemqty  = $reqdata['qty'];

			foreach ($itemid as $key => $item) {
				IssuanceItems::create([
					'issuance_id' => $data->id,
					'product_id' => $item,
					'cost' => $itemcost[$key],
					'qty' => $itemqty[$key]
				]);	
			}
		}

		return redirect(route('issuance.index'));
	}

}
