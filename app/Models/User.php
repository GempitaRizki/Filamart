<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'email', 'password', 'image'];

    protected $hidden = ['password', 'remember_token'];

    // Relasi ke tabel Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
