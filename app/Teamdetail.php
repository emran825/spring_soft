<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teamdetail extends Model
{
    //
     protected $fillable =[
    	'title_name','highlite_name','next_title','team_details','bg_image','team_image',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
