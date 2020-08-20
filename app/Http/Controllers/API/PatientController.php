<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PatientAdditionalDetailRepository;
use App\Http\Repositories\PatientDetailsRepository;
use App\Http\Repositories\PatientRepository;
use App\Http\Requests\PatientRequest;
use App\Patient_details;
use App\PatientAdditionalDetail;
use App\Patients;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    private $patient_repository;
    private $patient_details_repository;
    private $additional_details_repository;

    public function __construct(
        PatientRepository $patient_repository, 
        PatientDetailsRepository $patient_details_repository,
        PatientAdditionalDetailRepository $additional_details_repository
    )
    {
        $this->patient_repository = $patient_repository;
        $this->patient_details_repository = $patient_details_repository;
        $this->additional_details_repository = $additional_details_repository;
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
    public function store(PatientRequest $request)
    {
        // dd($request->all());
        $patient = $this->patient_repository->store($request->all());

        $this->patient_details_repository->store($request->all(), $patient);

		$this->additional_details_repository->store($request->all(), $patient);

        return response()->json([
            'success' => true,
            'message' => 'Patient added successfully'
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
        $patient = $this->patient_repository->show($id);

        return response()->json(compact('patient'));
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

    public function searchPatient(Request $request)
    {
        $patients = $this->patient_repository->getPatientsByName($request->name);

        return response()->json(compact('patients'));
    }
}
