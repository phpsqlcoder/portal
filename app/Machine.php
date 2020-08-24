<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    protected $guarded = [];

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}
