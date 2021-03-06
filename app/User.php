<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
         'email', 'password','address','phone','fname','lname',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function orders(){
        return $this->hasMany('App\Order');
    }
}
