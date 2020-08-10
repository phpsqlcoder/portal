<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stockin extends Model
{
	protected $fillable = ['user_id', 'product_id', 'document_date', 'qty', 'other_details'];

	public function product(){
    	return $this->belongsTo('App\Products');
	}
	
	public function user(){
    	return $this->belongsTo('App\User');
	}
	
	
}
