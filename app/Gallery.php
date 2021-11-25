<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
     //
    protected $fillable =[
    	'gallery_type','gallery_image',];

    protected $hidden = [
      'remember_token',
    ];
}
