<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logare;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
class FormBeforeLogin extends Controller
{
    public function ceva(){
        return view("form");
    }
    public function altceva($request){
        $validator = Validator::make($request->all(), [
            'lvl' => 'required|min:1',
            'username' => 'required|min:8',
            'experience' => 'required|min:0',
            'describe_gender' => 'required|min:0|max:10',
            ]);

        if ($validator->fails()) {
            Log::info('Validation failed', ['errors' => $validator->errors()]);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $logare = Logare::create([
            'lvl' => $request->input('lvl'),
            'username' => $request->input('username'),
            'experience' => $request->input('experience'),
            'describe_gender' => $request->input('describe_gender'),
        ]);
        $data= new Logare();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('dmY').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
        }
        if($request->file('background_image')){
            $file= $request->file('background_image');
            $filename= date('dmY').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['background_image']= $filename;
        }
        $data->save();

        if ($logare) {
            Log::info('User registered successfully', ['user' => $logare]);
            return redirect()->route('form.form')->with('success', 'Registration successful. Please log in.');
        } else {
            Log::error('Registration failed');
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }

//Store image

    }
    public function storeImage(Request $request){


    }
}
