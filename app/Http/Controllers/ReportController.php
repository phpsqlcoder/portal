<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//use App\Patients;
use App\ReceivingItems;

use App\transaction_header;
use App\transaction_detail;
use App\Schedule;

use App\Personnel;
use App\Patients;

class ReportController extends Controller
{
    public function patients()
    {
    	$qry =  Patients::whereNotNull('id');

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

    public function prescription()
    {
    	$qry = transaction_detail::whereNotNull('id');

    	if(isset($_GET['startdate']) && strlen($_GET['startdate']) >=1){
    		$qry->whereBetween('created_at',[date('Y-m-d',strtotime($_GET['startdate']))." 00:00:00.000",date('Y-m-d',strtotime($_GET['enddate']))." 23:59:59.999"]);
    	}

    	$rs = $qry->get();

    	return view('reports.prescription',compact('rs'));
    }

    public function inventory()
    {
    	$rs = ReceivingItems::get();

    	return view('reports.inventory',compact('rs'));

    }

    public function booking()
    {
    	$qry = Schedule::whereNotNull('id');

    	if(isset($_GET['startdate']) && strlen($_GET['startdate']) >=1){
    		$qry->whereBetween('created_at',[date('Y-m-d',strtotime($_GET['startdate']))." 00:00:00.000",date('Y-m-d',strtotime($_GET['enddate']))." 23:59:59.999"]);
    	}

    	$rs = $qry->get();

    	// $rs = $qry->get();
    	// $qry = Personnel::with(['schedules' => function($query){
    	// 	$query->whereBetween('date','=', date('Y-m-d'));
    	// }, 'schedules.patients'])->whereHas('schedules', function($query){
    	// 	$query->where('date','')
    	// })


    	return view('reports.booking',compact('rs'));
    }
}
