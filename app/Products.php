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

    public function getInventoryAttribute(){
      // if($this->id == 1){
      //   $prods = Products::all();
      //   foreach($prods as $prod){
      //     $ins = ReceivingItems::create([
      //       'receiving_id' => 1,
      //       'product_id' => $prod->id,
      //       'cost' => 0,
      //       'qty' => 30
      //     ]);
      //   }
      //}
       $inventory = transaction_detail::where('name',$this->name)->where('type','=','inventory')->sum('qty');	
       $in = ReceivingItems::where('product_id',$this->id)->sum('qty');	
       $inv = $in - $inventory;
        return $inv;
    }

    public static function totalCost(){
      
      $total = 0;
        $prods = Products::all();
        foreach($prods as $prod){
          $total += $prod->Inventory * $prod->price;
        }
     
        return number_format($total,2);
    }
}
