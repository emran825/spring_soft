<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    //
    protected $fillable = [
      'nav_one','nav_two','nav_three','nav_four','nav_five','nav_six','logo',

    ];
    protected $hidden = [
      'remember_token',
    ];


}
