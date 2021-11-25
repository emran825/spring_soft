<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreviewProduct extends Model
{
    protected $table = "preview_products";
    protected $fillable=['preview_link','product_id'];
    public function adm_pro(){
        return $this->belongsTo(AdminProduct::class,'product_id');
    }
}
