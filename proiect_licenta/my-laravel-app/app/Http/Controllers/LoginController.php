<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Logare;

class LoginController extends Controller
{
<<<<<<< HEAD
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
=======
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
>>>>>>> e5b14b87ea5ce3aa45dc33eedaea8feae6151573
    }
}
