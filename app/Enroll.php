<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    //
    protected $table='enrolls';
    protected $fillable =[
    'name','email','phone','gender','address','course_id',
    ];



    protected $hidden = [
      'remember_token',
    ];

     
}
