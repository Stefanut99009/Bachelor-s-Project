<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dupa_Logare extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv';
    protected $table = 'dupa_logare';
    public $timestamps = false;
    protected $fillable = [
        'image', 'lvl', 'experience', 'background_image','image','describe_yourself'
    ];
}
