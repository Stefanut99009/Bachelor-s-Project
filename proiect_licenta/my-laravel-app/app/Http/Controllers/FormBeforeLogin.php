<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Logare;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FormBeforeLogin extends Controller
{
    public function ceva()
    {
        return view("form");
    }

    public function altceva(Request $request)
    {
        Log::info('Incoming request', ['request' => $request->all()]);

        $validator = Validator::make($request->all(), [
            'lvl' => 'required|integer|min:1',
            'username' => 'required|string|min:1',
            'experience' => 'required|integer|min:0',
            'describe_yourself' => 'required|string|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'background_image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($validator->fails()) {
            Log::info('Validation failed', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->session()->get('email2');
        $form = Logare::where('email', $email)->first();

        if (!$form) {
            Log::error('User not found');
            return redirect()->back()->with('error', 'User not found. Please try again.');
        }

        $filePath1 = $form->image;
        $filePath2 = $form->background_image;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filePath1 = $file->store('photos', 'public');
        }

        if ($request->hasFile('background_image')) {
            $file = $request->file('background_image');
            $filePath2 = $file->store('photos', 'public');
        }

        $form->update([
            'lvl' => $request->input('lvl'),
            'experience' => $request->input('experience'),
            'username' => $request->input('username'),
            'image' => $filePath1,
            'background_image' => $filePath2,
            'describe_yourself' => $request->input('describe_yourself')
        ]);

        Log::info('User registered successfully', ['user' => $form]);
        return redirect()->route('login.form')->with('success', 'Registration successful. Please log in.');
    }
}
