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
    private $patientRepository;
    private $patientDetailsRepository;
    private $additionalDetailRepository;

    public function __construct(
        PatientRepository $patientRepository, 
        PatientDetailsRepository $patientDetailsRepository,
        PatientAdditionalDetailRepository $additionalDetailRepository
    )
    {
        $this->patientRepository = $patientRepository;
        $this->patientDetailsRepository = $patientDetailsRepository;
        $this->additionalDetailRepository = $additionalDetailRepository;
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
        $patient = $this->patientRepository->store($request->all());

        $this->patientDetailsRepository->store($request->all(), $patient);

		$this->additionalDetailRepository->store($request->all(), $patient);

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
        $patient = $this->patientRepository->show($id);

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
}
