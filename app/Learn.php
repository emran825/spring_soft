<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Learn extends Model
{
    protected $table = "learns";
    protected $fillable=['course_id'];
    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
