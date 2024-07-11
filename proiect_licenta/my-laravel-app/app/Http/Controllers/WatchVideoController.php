<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Response;
use Illuminate\Http\Request;
use App\Models\Tiktok;
use Illuminate\Support\Facades\Storage;
class WatchVideoController extends Controller
{
    public function watchvideo(){
        $ceva=Tiktok::all();
        
        return view("watchvideo",compact('ceva'));
    }
}
