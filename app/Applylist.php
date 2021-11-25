<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applylist extends Model
{
    //
    protected $fillable =[
    	'name','email','contact','gender','pev_job_role','resume','city',
    ];

    protected $hidden = [
      'remember_token',
    ];
}
