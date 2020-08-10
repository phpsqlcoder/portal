<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient_details extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['patient_id', 'pmh_hpn','pmh_dm','pmh_ba','pmh_ca','pmh_heart_disease','pmh_operation','psh_smoking','psh_alcohol',
    'fmh_similar_lesions','fmh_ca','allergy','soap','shampoo','lotion','perfume','detergent','fabric_softener','lmp','pmp','pregnant_plans','user_id'];
}
