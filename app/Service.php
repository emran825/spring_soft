<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable =[
    	'service_name','service_details','service_class',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
