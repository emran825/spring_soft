<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $table = "features";
    protected $fillable=['product_features_id','product_features','product_id'];
    public function adm_pro(){
        return $this->belongsTo(AdminProduct::class,'product_id');
    }
    public function pro_fea(){
        return $this->belongsTo(ProductFeature::class,'product_features_id');
    }
   
}
