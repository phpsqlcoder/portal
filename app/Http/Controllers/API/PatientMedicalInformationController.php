<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\PatientMedicalInformationRepository;
use App\Http\Repositories\PatientRepository;
use App\Http\Requests\PatientMedicalInformationRequest;
use App\Http\Services\PatientMedicalInformationService;

class PatientMedicalInformationController extends Controller
{
    private $patient_repository;
    private $patient_medical_information_repository;
    private $patient_medical_information_service;

    public function __construct(
        PatientMedicalInformationRepository $patient_medical_information_repository,
        PatientMedicalInformationService $patient_medical_information_service,
        PatientRepository $patient_repository
        )
    {
        $this->patient_medical_information_repository = $patient_medical_information_repository;
        $this->patient_medical_information_service = $patient_medical_information_service;
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
    public function store(PatientMedicalInformationRequest $request)
    {
        $this->patient_medical_information_service->storing($request->validated(), $request->patient);
        $patient = $this->patient_repository->show($request->patient['id']);
        return response()->json([
            'success' => true,
            'message' => 'Medical information saved successfully',
            'patient' => $patient
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
}