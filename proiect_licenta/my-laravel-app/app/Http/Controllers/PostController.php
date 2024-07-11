<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Tiktok;
use App\Models\Logare;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    public function post(){
        return view("post");
    }
    public function put_post(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'text' => 'required|min:5',
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webp',
        ]);

        if ($validator->fails()) {
            Log::info('Validation failed', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $email = null;
        if ($request->session()->has('email')) {
            $email = $request->session()->get('email');
        } else if ($request->session()->get('email2')) {
            $email = $request->session()->get('email2');
        }
        $user=Logare::where('email',$email)->firstOrFail();
        $imageUrl = Storage::url($user->image);
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filePath2 = $file->store('photos', 'public');
        }
        $ceva = Tiktok::create([
            'text' => $request->input('text'),
            'video' => $filePath2,
            'user_username' =>$user->username,
            'user_image' => $imageUrl
        ]);
        if ($ceva) {
            session()->put('email2', $request->input('email'));
            Log::info('User registered successfully', ['user' => $ceva]);
            return redirect()->route('watchvideo')->with('success', 'Registration successful. Please log in.');
        } else {
            Log::error('Registration failed');
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }


    }
}
