<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable =[
    	'banner_name','highlight_name','next_name','banner_details','bg_image',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
