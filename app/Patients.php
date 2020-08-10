<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Patients extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['fname', 'lname','mname','extname','gender','birthdate','address','contact_no','civil_status','occupation','referral','images','user_id'];

    public function getFullnameAttribute(){
        return $this->lname.", ".$this->fname." ".$this->mname." ".$this->extname;
    }

    public function getAgeAttribute(){
        return Carbon::parse($this->attributes['birthdate'])->age;
    }

    public function getPicturesAttribute(){
        return explode("|",$this->images);
    }

    public function info()
    {
        return $this->hasOne('App\Patient_details', 'patient_id');
    }
}
