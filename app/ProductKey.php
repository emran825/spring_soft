<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductKey extends Model
{
    protected $table = "product_keys";
    protected $fillable=['product_id'];
    public function adm_pro(){
        return $this->belongsTo(AdminProduct::class,'product_id');
    }
}
