<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //
     protected $fillable =[
    	'thana','district','house_no','floor_no','road_no','sector','uk_road','uk_phone','working_hours'
    ];

    protected $hidden = [
      'remember_token',
    ];
}
