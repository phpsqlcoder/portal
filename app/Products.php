<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'brand', 'cost', 'price'];

    public function getPercentageAttribute(){
        $percentage = number_format(((($this->price/$this->cost) * 100) - 100));

        return "$percentage %";
    }
}
