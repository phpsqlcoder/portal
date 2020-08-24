<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Patients;
use App\ReceivingItems;

class ReportController extends Controller
{
    public function patients()
    {
    	$qry =  Patients::whereNotNull('id');

    	if(isset($_GET['startdate']) && strlen($_GET['startdate']) >=1){
    		$qry->whereBetween('created_at',[date('Y-m-d',strtotime($_GET['startdate']))." 00:00:00.000",date('Y-m-d',strtotime($_GET['enddate']))." 23:59:59.999"]);
    	}
       
       $rs = $qry->get();

        return view('reports.patients',compact('rs'));

    }

    public function receiving()
    {
    	$qry =  ReceivingItems::whereNotNull('id');

    	if(isset($_GET['startdate']) && strlen($_GET['startdate']) >=1){
    		$qry->whereBetween('created_at',[date('Y-m-d',strtotime($_GET['startdate']))." 00:00:00.000",date('Y-m-d',strtotime($_GET['enddate']))." 23:59:59.999"]);
    	}
       
       $rs = $qry->get();

        return view('reports.receiving',compact('rs'));

    }
}
