<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'user_id';  // Kasi ikaw may user_id sa table
    public $timestamps = false;         // Hindi niyo ginagamit ang default timestamps

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'password',
        'role',
        'date_created',
        'date_updated'
    ];

    protected $hidden = [
        'password',
    ];
}
