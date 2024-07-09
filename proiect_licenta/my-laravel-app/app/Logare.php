<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logare extends Model
{
	use HasFactory;

	protected $fillable = [
		'image', 'lvl', 'username','experience','background_image','describe_yourself','email','password','date','gender'
	];
    public $timestamps = false;
}

?>
