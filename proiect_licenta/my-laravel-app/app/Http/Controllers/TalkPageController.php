<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TalkPageController extends Controller
{
    public function talkpage(){
        return view("talkpage");
    }
}
