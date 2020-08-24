<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReceivingItems extends Model
{
    protected $fillable = ['receiving_id', 'product_id', 'cost', 'qty'];
    public $timestapms = true;

    public function item_detail()
    {
    	return $this->belongsTo('App\Products','product_id');
    }

    public function receiving_detail()
    {
    	return $this->belongsTo('App\Receiving','receiving_id');
    }
}
