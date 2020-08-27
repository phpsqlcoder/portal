<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssuanceItems extends Model
{
    protected $fillable = ['issuance_id', 'product_id', 'cost', 'qty'];
    public $timestapms = true;

    public function item_detail()
    {
    	return $this->belongsTo('App\Products','product_id');
    }

    public function issuance_detail()
    {
    	return $this->belongsTo('App\Issuances','issuance_id');
    }
}
