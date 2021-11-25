<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

      protected $fillable =[
    	'course_name','course_duration','no_ofclass','total_hours','reg_deadline','class_schedule','venue','course_price','course_image','course_type','course_details'
    ];

    protected $hidden = [
      'remember_token',
    ];

  public function enroll()
    {
        return $this->hasOne(Enroll::class,'course_id','id');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
}
