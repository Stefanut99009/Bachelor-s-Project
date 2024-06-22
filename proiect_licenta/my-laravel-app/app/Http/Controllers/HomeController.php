<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logare;
class HomeController extends Controller
{
    public function index(){
return view('userpage');
}
public function variables(){
    $variable="";
    session()->get('email',$variable);
    $ceva=Logare::select('age','gender','date')->where('email',$variable)->first();
    $age=$ceva['age'];
    $gender=$ceva['gender'];
    $date=date('d-m-Y',strtotime($ceva['date']));
}
}
