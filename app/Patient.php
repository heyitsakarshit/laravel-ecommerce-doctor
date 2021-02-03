<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Patient extends Authenticatable
{
    use Notifiable;
    protected $gaurd = 'pharmacy';
    protected $fillable = ['name','email','password'];
    protected $hidden = ['password','remember_token'];
}