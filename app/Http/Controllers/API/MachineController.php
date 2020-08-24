<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\MachineRepository;
use App\Http\Services\MachineService;

class MachineController extends Controller
{
    private $machine_service;
    private $machine_repository;

    public function __construct(MachineService $machine_service, MachineRepository $machine_repository)
    {
        $this->machine_service = $machine_service;
        $this->machine_repository = $machine_repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $machines = $this->machine_repository->fetchAll();

        return response()->json(compact('machines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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

    public function fetchAvailableMachines(Request $request)
    {
        dd($request->all());
        $machines = $this->machine_service->fetchAvailableMachines($request->all());
    }

    public function fetchMachinesThatHasSchedule()
    {
        $machines = $this->machine_repository->fetchMachinesThatHasSchedule();

        return response()->json(compact('machines'));
    }

    public function fetchMachinesThatHasScheduleByDate(Request $request)
    {
        $machines = $this->machine_repository->fetchMachinesThatHasScheduleByDate($request->all());

        return response()->json(compact('machines'));
    }
}
