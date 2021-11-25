<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderTable extends Model
{
    protected $table = "order_tables";
    protected $fillable=['customer_id','shipping_id','order_total','order_status'];
    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }
}
