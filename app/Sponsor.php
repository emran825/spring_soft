<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    protected $fillable =[
    	's_name','sponsor_image',];

    protected $hidden = [
      'remember_token',
    ];
}
