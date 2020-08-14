<?php

namespace App\Http\Repositories;

use App\Patients;
use Exception;
use Illuminate\Support\Facades\DB;

class PatientRepository {
    private $patient;

    public function __construct(Patients $patients)
    {
        $this->patient = $patients;
    }

    public function store($request)
    {
        try {
            return $this->patient->create([
                'fname' => $request['fname'],
                'lname' => $request['lname'],
                'mname' => $request['mname'],
                'extname' => (array_key_exists('extname', $request)) ? $request['extname'] : null,
                'gender' => $request['gender'],
                'birthdate' => $request['birthdate'],
                'address' => $request['address'],
                'contact_no' => $request['contact_no'],
                'civil_status' => $request['civil_status'],
                'occupation' => (array_key_exists('occupation', $request)) ? $request['occupation'] : null,
                'referral' => (array_key_exists('referral', $request)) ? $request['referral'] : null,
                'images' => 'test',
                'user_id' => $request['user_id']
            ]);
        } catch (Exception $exception) {
            DB::rollBack();
            return $exception;
        }
    }

    public function show($id)
    {
		return $this->patient->with(['info', 'patientAdditionalDetail', 'patientMedicalInformation'])->whereId($id)->first();      
    }
}