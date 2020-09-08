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

    public function getImageAttribute($image)
    {
        return ($image == null) ? 'images/profile.png' : "/storage/$image"; 
    }

    public function schedules()
    {
        return $this->belongsToMany('App\Schedule');
    }
}
