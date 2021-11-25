<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    protected $table = "order_payments";
    protected $fillable=['order_id','payment_type'];
    public function order(){
        return $this->belongsTo(OrderTable::class,'order_id');
    }
}
