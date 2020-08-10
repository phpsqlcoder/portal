<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction_header extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

	protected $fillable = ['patient_id', 'chief_complaint','diagnoses','recommendation','remarks','visit_date','user_id'];
	
	public function getRefcodeAttribute(){
		$ref = $this->genRefCode($this->id);
		return "{$ref}";
	}

	public function genRefCode($n){     
        $r=strlen($n);
        $e=6 - $r;
        $z="";
        for($x=1;$x<=$e;$x++){
            $z.="0";
        }
        $refcode=$z.$n;
        return $refcode;
	}
	
	public function patient(){
    	return $this->belongsTo('App\Patients');
    }
}
