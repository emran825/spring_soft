<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learncontent extends Model
{
    protected $table = "learncontents";
    protected $fillable=['course_id'];
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
