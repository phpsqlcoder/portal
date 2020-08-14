<?php

namespace App\Http\Services;

use App\Http\Repositories\PatientMedicalInformationRepository;

class PatientMedicalInformationService {
    private $patient_medical_information_repository;

    public function __construct(PatientMedicalInformationRepository $patient_medical_information_repository)
    {
        $this->patient_medical_information_repository = $patient_medical_information_repository;
    }

    public function storing($request, $patient)
    {
        $request_to_json = json_encode($request);

        $medical_information = $this->patient_medical_information_repository->storeOrUpdate($request_to_json, $patient);

        return $medical_information;
    }
}