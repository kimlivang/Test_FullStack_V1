<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersClient extends Model
{
    use HasFactory;
    protected $table='users_client';
    protected $fillable = ['username', 'email', 'password']; 

    // protected $table='test';
    // protected $fillable = ['NameUser', 'EmailUser', 'password']; 

    protected $hide=['password'];
}
