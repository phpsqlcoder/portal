<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    
    public function index()
    {
        $services = Services::orderBy('id','desc')->get();
        return view('services.index',compact('services'));
    }
    
    public function store(Request $request)
    {
        $save = Services::create([
            'name' => $request->name,
            'brand' => $request->brand,
            'cost' => $request->cost,
            'price' => $request->price
        ]);

        return back();
    }
    
    public function show(services $service)
    {     
        return $service->toJson();
    }
    
    public function update(Request $request, services $service)
    {
        $update = $service->update([
            'name' => $request->name_edit,
            'brand' => $request->brand_edit,
            'cost' => $request->cost_edit,
            'price' => $request->price_edit
        ]);

        return back();
    }
    
    public function destroy(services $service)
    {
        $service->delete();
        return back();
    }
}
