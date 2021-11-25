<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whylearn extends Model
{
    protected $table = "whylearns";
    protected $fillable=['learns_id','why_learn','course_id'];
    public function learns(){
        return $this->belongsTo(Learn::class,'learns_id');
    }
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
