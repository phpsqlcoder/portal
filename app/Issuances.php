<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issuances extends Model
{
    public $table = 'issuances';

    protected $fillable = ['issuance_date', 'type', 'status', 'purpose'];
    public $timestamps = true;

    public function items()
    {
    	return $this->hasMany('App\IssuanceItems','issuance_id');
    }
}
