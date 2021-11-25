<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
      protected $fillable =[
    	'blog_title','blog_details','blog_author','publish_date','blog_image'
    ];

    protected $hidden = [
      'remember_token',
    ];
}
