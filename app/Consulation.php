<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulation extends Model
{
    //
     protected $fillable =[
    	'name','phone','topic','message'
    ];

    protected $hidden = [
      'remember_token',
    ];
}
