<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    protected $table = "key_features";
    protected $fillable=['product_keys_id','key_features','product_id'];
    public function adm_pro(){
        return $this->belongsTo(AdminProduct::class,'product_id');
    }
    public function pro_key(){
        return $this->belongsTo(ProductKey::class,'product_keys_id');
    }
}
