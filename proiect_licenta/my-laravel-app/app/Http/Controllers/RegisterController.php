<?php

namespace App\Http\Controllers;

use App\Models\Logare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('onlyregister'); // Make sure this view exists
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:logare,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
            'date' => 'required|date',
            'gender' => 'required|in:male,female,other',
        ]);

        if ($validator->fails()) {
            Log::info('Validation failed', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $logare = Logare::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'date' => $request->input('date'),
            'gender' => $request->input('gender'),
        ]);

        if ($logare) {
            Log::info('User registered successfully', ['user' => $logare]);
            return redirect()->route('login.form')->with('success', 'Registration successful. Please log in.');
        } else {
            Log::error('Registration failed');
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }
}
