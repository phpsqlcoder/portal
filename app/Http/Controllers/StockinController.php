<?php

namespace App\Http\Controllers;

use App\Stockin;
use App\Products;
use Auth;
use Illuminate\Http\Request;

class StockinController extends Controller
{
    
    public function index()
    {
		$products = Products::orderBy('id','desc')->get();
		$stockins = Stockin::orderBy('id','desc')->get();
        return view('stockins.index',compact('products','stockins'));
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $save = Stockin::create([
            'document_date' => $request->date,
            'product_id' => $request->product,
            'user_id' => Auth::id(),
			'qty' => $request->qty,
			'other_details' => $request->details
        ]);

        return back();
    }
    
    public function show(Stockin $stockin)
    {
        //
    }
    
    public function edit(Stockin $stockin)
    {
        //
    }
    
    public function update(Request $request, Stockin $stockin)
    {
        //
    }
    
    public function destroy(Stockin $stockin)
    {
        //
    }
}
