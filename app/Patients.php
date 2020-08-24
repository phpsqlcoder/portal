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

    protected $appends = ['fullname'];
    
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
        return $this->hasOne('App\Patient_details', 'patient_id')->withDefault([
            'pmh_hpn' => 'N/A',
            'pmh_dm' => 'N/A',
            'pmh_ba' => 'N/A',
            'pmh_ca' => 'N/A',
            'pmh_heart_disease' => 'N/A',
            'pmh_operation' => 'N/A',
            'psh_smoking' => 'N/A',
            'psh_alcohol' => 'N/A',
            'fmh_similar_lesions' => 'N/A',
            'fmh_ca' => 'N/A',
            'allergy' => 'N/A',
            'soap' => 'N/A',
            'shampoo' => 'N/A',
            'lotion' => 'N/A',
            'perfume' => 'N/A',
            'detergent' => 'N/A',
            'fabric_softener' => 'N/A',
            'lmp' => 'N/A',
            'pmp' => 'N/A',
            'pregnant_plans' => 'N/A'
        ]);
    }

    public function patientAdditionalDetail()
    {
        return $this->hasOne('App\PatientAdditionalDetail', 'patient_id')->withDefault([
            'patient_id' => 'N/A',
            'local_address' => 'N/A',
            'local_street_number' => 'N/A',
            'local_subdivision' => 'N/A',
            'local_city' => 'N/A',
            'local_country' => 'N/A',
            'local_postal_code' => 'N/A',
            'local_telephone_number' => 'N/A',
            'local_fax_number' => 'N/A',
            'local_email' => 'N/A',
            'foreign_address' => 'N/A',
            'foreign_street_number' => 'N/A',
            'foreign_subdivision' => 'N/A',
            'foreign_city' => 'N/A',
            'foreign_country' => 'N/A',
            'foreign_postal_code' => 'N/A',
            'foreign_telephone_number' => 'N/A',
            'foreign_fax_number' => 'N/A',
            'foreign_email' => 'N/A',
            'emergency_contact_person' => 'N/A',
            'emergency_contact_number' => 'N/A',
        ]);
    }

    public function patientMedicalInformation()
    {
        return $this->hasOne('App\PatientMedicalInformation', 'patient_id');
    }

    public function schedules()
    {
        return $this->hasMany('App\Schedule', 'patient_id');
    }

    public function x()
    {
        return true;
    }
       
}
