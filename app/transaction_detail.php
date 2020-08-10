<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction_detail extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

	protected $fillable = ['header_id', 'type','qty','price','name','total_days','when_to_apply'];
	
	public function header(){
    	return $this->belongsTo('App\transaction_header','header_id');
	}

	
}
