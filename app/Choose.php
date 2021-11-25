<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choose extends Model
{
    //
     protected $fillable =[
    	'b_point1','details1','b_point2','details2','b_point3','details3',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
