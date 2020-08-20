<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PersonnelRepository;

class PersonnelController extends Controller
{
    private $personnel_repository;

    public function __construct(PersonnelRepository $personnel_repository)
    {
        $this->personnel_repository = $personnel_repository;
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

}
