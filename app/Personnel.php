<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    protected $guarded = [];

    public function getIsActiveAttribute($status)
    {
        return ($status == 1) ? 'Active' : 'Inactive';
    }

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}
