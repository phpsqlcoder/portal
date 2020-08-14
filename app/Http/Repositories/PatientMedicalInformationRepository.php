<?php

namespace App\Http\Repositories;

use App\PatientMedicalInformation;
use Exception;
use Illuminate\Support\Facades\DB;

class PatientMedicalInformationRepository {

    private $patient_medical_information;

    public function __construct(PatientMedicalInformation $patient_medical_information)
    {
        $this->patient_medical_information = $patient_medical_information;
    }

    public function storeOrUpdate($request, $patient)
    {
        try {
            return $this->patient_medical_information->updateOrCreate(
                ['patient_id' => $patient['id']],
                ['answers' => $request]
            );
            
        } catch (Exception $exception) {
            DB::rollBack();

            return $exception;
        }
    }
}