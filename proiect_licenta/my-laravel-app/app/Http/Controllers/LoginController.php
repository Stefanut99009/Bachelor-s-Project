<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Logare;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('register_login');
    }

    public function login(Request $request)
    {
        $validator = $this->validateLogin($request);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::guard('ceva')->attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return redirect()->route('contact')->with('success', 'Login successful.');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.')->withInput();
        }

    }

    private function validateLogin(Request $request)
    {
        return Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.form')->with('success', 'Logout successful.');
    }
}
