<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PatientRepository;
use App\Http\Repositories\ScheduleRepository;
use App\Http\Services\ScheduleService;
use App\Machine;
use App\Personnel;
use App\Schedule;

class ScheduleController extends Controller
{
    private $schedule_repository;
    private $schedule_service;
    private $patient_repository;

    public function __construct(ScheduleService $schedule_service, ScheduleRepository $schedule_repository, PatientRepository $patient_repository)
    {
        $this->schedule_repository = $schedule_repository;
        $this->schedule_service = $schedule_service;
        $this->patient_repository = $patient_repository;    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->schedule_service->store($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Schedule successfully added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->schedule_service->store($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetchTodaySchedule()
    {
        $schedules = $this->schedule_repository->fetchTodaySchedule();
        
        return response()->json(compact('schedules'));
    }

    public function cancelSchedule($id)
    {
        $this->schedule_service->cancelSchedule($id);

        return response()->json([
            'success' => true,
            'message' => 'Schedule cancelled successfully'
        ]);
    }
}
