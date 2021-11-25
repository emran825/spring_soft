<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable =[
    	'name','email','phone','gender','address','amount','trxID','status'
    ];
}
