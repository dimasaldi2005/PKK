<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserMobile extends Authenticatable
{
    protected $table = 'users_mobile';

    protected $fillable = [
        'phone_number',
        'full_name',
        'password'
    ];
}
