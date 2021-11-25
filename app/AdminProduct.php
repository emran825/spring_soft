<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    protected $table = "admin_products";
    protected $fillable=['product_name','short_description','description','regular_price','sale_price','stock_status','quantity','image','preview_link','category_id'];
    public function category(){
        return $this->belongsTo(ProductCategory::class,'category_id');
    }
}
