<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
  
    //
     protected $fillable =[
    	'job_name','job_details','job_type',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
