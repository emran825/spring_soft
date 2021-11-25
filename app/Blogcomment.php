<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcomment extends Model
{
    //
    protected $fillable =[
    	'name','email','subject','comments','blog_name'
    ];

    protected $hidden = [
      'remember_token',
    ];
}
