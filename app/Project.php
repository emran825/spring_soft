<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
     protected $fillable =[
    	'project_name','project_type','project_image','demo_link'
    ];

    protected $hidden = [
      'remember_token',
    ];
}
