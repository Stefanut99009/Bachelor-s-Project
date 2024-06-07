<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email2');
        $password = $request->input('password3');
        $hashed_password = Hash::make($password);
    $query = DB::select('SELECT email, password FROM logare WHERE email = ? AND password = ?', [$email, $hashed_password]);

if (!empty($query)) {
    return redirect()->route('userpage'); // Replace 'home' with the name of the route you want to redirect to
} else {
    return redirect()->back()->with('error', 'Invalid credentials.');
}
}
}
