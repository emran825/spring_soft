<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    //
    protected $fillable =[
    	'title','link1','link2','link3','link4','link5',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
