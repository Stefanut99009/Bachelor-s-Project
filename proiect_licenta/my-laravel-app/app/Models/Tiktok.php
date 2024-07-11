<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiktok extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv';
    protected $table = 'tiktoks';
    protected $fillable = ['video','text','user_username','user_image'];
}
