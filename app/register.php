<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public $fillable = ['name', 'phone', 'password', 'skill', 'email', 'address', 'fee', 'experience', 'image'];
}
