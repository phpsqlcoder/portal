<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PersonnelRepository;
use App\Http\Services\PersonnelService;

class PersonnelController extends Controller
{
    private $personnel_repository;
    private $personnel_service;

    public function __construct(PersonnelRepository $personnel_repository, PersonnelService $personnel_service)
    {
        $this->personnel_repository = $personnel_repository;
        $this->personnel_service = $personnel_service;
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

    public function fetchAllDoctors()
    {
        $doctors = $this->personnel_repository->fetchAllDoctors();

        return response()->json(compact('doctors'));
    }

    public function fetchAllNurses()
    {
        $nurses = $this->personnel_repository->fetchAllNurses();

        return response()->json(compact('nurses'));
    }

    public function fetchPersonnelsThatHasSchedule()
    {
        $personnels = $this->personnel_repository->fetchPersonnelsThatHasSchedule();
        
        return response()->json(compact('personnels'));
    }

    public function fetchAvailablePersonnels(Request $request)
    {
        $personnels = $this->personnel_service->fetchAvailablePersonnels($request->all());

        return response()->json(compact('personnels'));
    }

    public function fetchPersonnelsThatHasScheduleByDate(Request $request)
    {
        $personnels = $this->personnel_repository->fetchPersonnelsThatHasScheduleByDate($request->all());

        return response()->json(compact('personnels'));
    }

}
