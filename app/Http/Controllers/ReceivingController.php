<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Filesystem\Filesystem;

use Auth;

use App\Products;
use App\Receiving;
use App\ReceivingItems;

class ReceivingController extends Controller
{
    
    public function index()
    {
    	$data = Receiving::all(); 
        return view('receiving.index',compact('data'));
	}

	public function create()
	{
		$items = Products::all();

		return view('receiving.create',compact('items'));
	}

	public function store(Request $req)
	{
		$data = Receiving::create([
			'receipt_no' => $req->receiptno,
			'supplier_id' => $req->supplier,
			'attachment' => isset($req->attachment) ? $req->attachment->getClientOriginalName() : 'NULL'
		]);

		if($data){
			$reqdata  = $req->all();
			$itemid   = $reqdata['itemid'];
			$itemcost = $reqdata['cost'];
			$itemqty  = $reqdata['qty'];

			foreach ($itemid as $key => $item) {
				ReceivingItems::create([
					'receiving_id' => $data->id,
					'product_id' => $item,
					'cost' => $itemcost[$key],
					'qty' => $itemqty[$key]
				]);	
			}

			if(isset($req->attachment)){
				$file = $req->attachment;

                Storage::makeDirectory('/public/issuances/'.$data->id);
                Storage::putFileAs('/public/issuances/'.$data->id, $file, $file->getClientOriginalName());
            }


		}

		return redirect(route('receiving.list'));
	}

	public function download($id,$filename)
	{
		return response()->download(storage_path("app/public/issuances/{$id}/{$filename}"));
	}

}
