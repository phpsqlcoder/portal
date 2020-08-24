<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $guarded = [];

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}
