<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productorder extends Model
{
    protected $table = "productorders";
    protected $fillable=['order_id','product_id','product_name','product_price','product_quentity'];
    public function order(){
        return $this->belongsTo(OrderTable::class,'order_id');
    }
    public function product(){
        return $this->belongsTo(AdminProduct::class,'product_id');
    }
}
