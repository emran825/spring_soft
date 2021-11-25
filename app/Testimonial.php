<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    //
     protected $fillable =[
    	'author','designation','details','clint', ];

    protected $hidden = [
      'remember_token',
    ];
}
