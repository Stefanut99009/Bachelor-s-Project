<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Logare extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $connection = 'sqlsrv';
    protected $table = 'logare';
    public $timestamps = false;
    protected $fillable = [
        'email', 'password', 'date', 'gender','image', 'lvl', 'experience', 'background_image','describe_yourself','username'
    ];
}
