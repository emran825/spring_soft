<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    
      //
     protected $fillable = [
        'm_name', 'm_link',
    ];
     protected $hidden = [
      'remember_token',
    ];
}
