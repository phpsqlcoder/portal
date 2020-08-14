<?php

namespace App\Http\Repositories;

use App\PatientAdditionalDetail;
use Exception;
use Illuminate\Support\Facades\DB;

class PatientAdditionalDetailRepository {
    private $patientAddtionalDetail;

    public function __construct(PatientAdditionalDetail $patientAdditionalDetail)
    {
        $this->patientAddtionalDetail = $patientAdditionalDetail;
    }

    public function store($request, $patient)
    {
        try {
            return $this->patientAddtionalDetail->create([
                'patient_id' => $patient->id,
                'local_address' => $request['local_address'],
                'local_street_number' => $request['local_street_number'],
                'local_subdivision' => $request['local_subdivision'],
                'local_city' => $request['local_city'],
                'local_country' => $request['local_country'],
                'local_postal_code' => $request['local_postal_code'],
                'local_telephone_number' => $request['local_telephone_number'],
                'local_fax_number' => (array_key_exists('local_fax_number', $request)) ? $request['local_fax_number'] : null,
                'local_email' => $request['local_email'],
                'foreign_address' => (array_key_exists('foreign_address', $request)) ? $request['foreign_address'] : null,
                'foreign_street_number' => (array_key_exists('foreign_street_number', $request)) ? $request['foreign_street_number'] : null,
                'foreign_subdivision' => (array_key_exists('foreign_subdivision', $request)) ? $request['foreign_subdivision'] : null,
                'foreign_city' => (array_key_exists('foreign_city', $request)) ? $request['foreign_city'] : null,
                'foreign_country' => (array_key_exists('foreign_country', $request)) ? $request['foreign_country'] : null,
                'foreign_postal_code' =>(array_key_exists('foreign_postal_code', $request)) ? $request['foreign_postal_code'] : null,
                'foreign_telephone_number' => (array_key_exists('foreign_telephone_number', $request)) ? $request['foreign_telephone_number'] : null,
                'foreign_fax_number' => (array_key_exists('foreign_fax_number', $request)) ? $request['foreign_fax_number'] : null,
                'foreign_email' => (array_key_exists('foreign_email', $request)) ? $request['foreign_email'] : null,
                'emergency_contact_person' => $request['emergency_contact_person'],
                'emergency_contact_number' => $request['emergency_contact_number'],
            ]);
        } catch (Exception $exception) {
            DB::rollback();

            return $exception;
        }
    }
}