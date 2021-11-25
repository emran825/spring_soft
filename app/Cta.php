<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cta extends Model
{
    //
    protected $fillable =[
    	'title','bold_title','phone','details','bg_image',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
