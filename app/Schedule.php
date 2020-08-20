<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $guarded = [];

    public function patients() 
    {
        return $this->belongsTo('App\Patients', 'patient_id');
    }

    public function personnels()
    {
        return $this->belongsToMany('App\Personnel');
    }

    public function machines()
    {
        return $this->belongsToMany('App\Machines');
    }
}
