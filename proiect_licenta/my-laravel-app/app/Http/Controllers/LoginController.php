<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email2');
        $password = $request->input('password3');

        $result = DB::select('SELECT email, password FROM logare WHERE email = ?', [$email]);

        if (!empty($result)) {
            $stored_hashed_password = $result[0]->password;

            if (Hash::check($password, $stored_hashed_password)) {
                return redirect()->route('userpage'); 
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }
}
