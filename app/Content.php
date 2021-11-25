<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = "contents";
    protected $fillable=['learncontents_id','course_content','course_id'];
    public function learncontents(){
        return $this->belongsTo(Learncontent::class,'learncontents_id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
