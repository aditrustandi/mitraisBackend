<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    protected $table = 'users';

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'date_of_birth', 'gender'
    ];
}
