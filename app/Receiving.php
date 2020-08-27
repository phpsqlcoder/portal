<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiving extends Model
{
	public $table = 'receiving';
    protected $fillable = ['receipt_no', 'supplier_id','attachment'];
    public $timestapms = true;

    public function items()
    {
    	return $this->hasMany('App\ReceivingItems','receiving_id');
    }
}
