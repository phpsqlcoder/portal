<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PersonnelRepository;
use App\Http\Requests\PersonnelRequest;
use App\Http\Services\PersonnelService;
use App\Personnel;

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
        $personnels = $this->personnel_repository->fetchAll();

        return response()->json(compact('personnels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonnelRequest $request)
    {
        $result = $this->personnel_service->store($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Personnel saved successfully',
            'result' => $result
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

    public function toggleStatus(Personnel $personnel)
    {
        $personnel = $this->personnel_repository->toggleStatus($personnel);

        return response()->json(['message' => 'Personnel status updated successfully', 'personnel' => $personnel]);
    }

    public function updateData(PersonnelRequest $request, Personnel $personnel)
    {
        // dd($request->all());
        // $updated = $this->personnel_repository->editData($request->all(), $personnel);
        $this->personnel_service->updateData($request->all(), $personnel);

        return response()->json(['message' => 'Personnel status updated successfully', 'personnel' => $personnel]);
    }

}
