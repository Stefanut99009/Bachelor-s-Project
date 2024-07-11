<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $connection = 'sqlsrv';
    protected $table = 'blogs';
    protected $fillable = ['image_or_video','text_for_blogs','user_username','user_image'];

}
