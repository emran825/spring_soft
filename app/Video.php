<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
     protected $fillable = [
        'v_name', 'v_link',
    ];
     protected $hidden = [
      'remember_token',
    ];
}
