<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ToDoPageController extends Controller
{
    public function todopage(){
        return view("todopage");
    }
}
