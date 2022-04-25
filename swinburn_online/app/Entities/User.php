<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use VCComponent\Laravel\User\Entities\User as BaseUser;

class User extends BaseUser
{
    use Notifiable;

    protected $fillable = [
        'email',
        'username',
        'first_name',
        'last_name',
        'avatar',
        'birth',
        'gender',
        'phone_number',
        'address',
        'verify_token',
        'password'
    ];

    protected $casts = [
        'birth' => 'datetime:d/m/Y',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

}
