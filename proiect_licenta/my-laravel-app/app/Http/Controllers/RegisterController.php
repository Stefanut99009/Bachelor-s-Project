<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $password2 = $request->input('password2');
        $date = $request->input('date');
        $gender = $request->input('gender');
        if ($password !== $password2) {
            return redirect()->back()->with('error', 'Passwords do not match.');
        }
        $hashed_password = Hash::make($password);
    $inserted=DB::insert('INSERT INTO logare (email, password, date, gender) VALUES (?, ?, ?, ?)',[$email , $hashed_password,$date,$gender]);
    if($inserted) {
    return redirect()->route('register_login'); // Replace 'home' with the name of the route you want to redirect to
} else {
    return redirect()->back()->with('error', 'Invalid credentials.');
}
}
}
