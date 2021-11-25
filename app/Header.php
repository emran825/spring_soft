<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    //
    protected $fillable = [
         'email', 'phone','open_time','f_link','i_link','t_link','u_link',
    ];
    protected $hidden = [
        'remember_token',
    ];
}
