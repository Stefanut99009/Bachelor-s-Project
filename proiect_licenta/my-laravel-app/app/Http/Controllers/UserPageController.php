<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Logare;
class UserPageController extends Controller
{
    public function userpage(Request $request){
        $email=null;
        if ($request->session()->has('email')) {
        $email=$request->session()->get('email');
        } else {
            $email= $request->session()->get('email2');
        }
        $user=Logare::where('email',$email)->firstOrFail();
        $imageUrl = Storage::url($user->image);
        $backgroundImageUrl = Storage::url($user->background_image);
        return view('userpage', compact('user', 'imageUrl', 'backgroundImageUrl'));
    }
}
