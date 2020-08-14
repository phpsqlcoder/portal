<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientMedicalInformation extends Model
{
    protected $guarded = [];

    public function getAnswersAttribute($data)
    {
        return json_decode($data);
    }
}
