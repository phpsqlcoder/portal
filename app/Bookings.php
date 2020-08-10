<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{

	protected $fillable = ['patient_id', 'date'];
	
	public function patient(){
    	return $this->belongsTo('App\Patients');
	}

}
