<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Products::orderBy('id','desc')->get();
        return view('products.index',compact('products'));
    }
    
    public function store(Request $request)
    {
        $save = Products::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'cost' => 0,
            'price' => $request->price
        ]);

        return back();
    }
    
    public function show(Products $product)
    {     
        return $product->toJson();
    }
    
    public function update(Request $request, Products $product)
    {
        $update = $product->update([
            'name' => $request->name_edit,
            'brand' => $request->brand_edit,
            'cost' => 0,
            'price' => $request->price_edit
        ]);

        return back();
    }
    
    public function destroy(Products $product)
    {
        $product->delete();
        return back();
	}
	
	public function stockcard($id)
    {
        $product = Products::findOrFail($id);
        $stockins = \App\stockin::where('product_id','=',$id)->get();       
        $stockouts = \App\transaction_detail::where('name','=',$product->name)->get();   
       
        
        return view('products.stockcard',compact('product','stockins','stockouts'));
    }
}
