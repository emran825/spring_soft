<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=['f_name','l_name','phone','email','password','password_confirmation'];
}
