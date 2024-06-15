<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WatchVideoController extends Controller
{
    public function watchvideo(){
        return view("watchvideo");
    }
}
