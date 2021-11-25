<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    //
    protected $fillable =[
    	'title_name','highlite_name','next_title','about_details','bg_image','ceo_image',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
