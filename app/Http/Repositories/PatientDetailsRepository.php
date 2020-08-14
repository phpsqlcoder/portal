<?php

namespace App\Http\Repositories;

use App\Patient_details;
use Exception;

class PatientDetailsRepository {
    private $patient;

    public function __construct(Patient_details $patientDetails)
    {
        $this->patient = $patientDetails;
    }

    public function store($request, $patient)
    {
        try {
            return Patient_details::create([
                'patient_id' => $patient->id, 
                'pmh_hpn' => (array_key_exists('pmh_hpn', $request)) ? $request['pmh_hpn'] : null,
                'pmh_dm' => (array_key_exists('pmh_dm', $request)) ? $request['pmh_dm'] : null,
                'pmh_ba' => (array_key_exists('pmh_ba', $request)) ? $request['pmh_ba'] : null,
                'pmh_ca' => (array_key_exists('pmh_ca', $request)) ? $request['pmh_ca'] : null,
                'pmh_heart_disease' => (array_key_exists('pmh_heart_disease', $request)) ? $request['pmh_heart_disease'] : null,
                'pmh_operation' => (array_key_exists('pmh_operation', $request)) ? $request['pmh_operation'] : null,
                'psh_smoking' => (array_key_exists('psh_smoking', $request)) ? $request['psh_smoking'] : null,
                'psh_alcohol' => (array_key_exists('psh_alcohol', $request)) ? $request['psh_alcohol'] : null,
                'fmh_similar_lesions' => (array_key_exists('fmh_similar_lesions', $request)) ? $request['fmh_similar_lesions'] : null,
                'fmh_ca' => (array_key_exists('fmh_ca', $request)) ? $request['fmh_ca'] : null,
                'allergy' => (array_key_exists('allergy', $request)) ? $request['allergy'] : null,
                'soap' => (array_key_exists('soap', $request)) ? $request['soap'] : null,
                'shampoo' => (array_key_exists('shampoo', $request)) ? $request['shampoo'] : null,
                'lotion' => (array_key_exists('lotion', $request)) ? $request['lotion'] : null,
                'perfume' => (array_key_exists('perfume', $request)) ? $request['perfume'] : null,
                'detergent' => (array_key_exists('detergent', $request)) ? $request['detergent'] : null,
                'fabric_softener' => (array_key_exists('fabric_softener', $request)) ? $request['fabric_softener'] : null,
                'lmp' => (array_key_exists('lmp', $request)) ? $request['lmp'] : null,
                'pmp' => (array_key_exists('pmp', $request)) ? $request['pmp'] : null,
                'pregnant_plans' => (array_key_exists('pregnant_plans', $request)) ? $request['pregnant_plans'] : null,
                'user_id' => $request['user_id']
            ]);
        } catch (Exception $exception) {
            return $exception;
        }
    }
}