<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'sex','dob','nationalcard','specialization','status',
        'nationality','workinghours','phone','email','village','city','district','province',
        'currentaddress',
    ];
}
