<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Logare;
use Illuminate\Support\Facades\Storage;
class PusherController extends Controller
{
    public function index(Request $request)
    {
        $email = null;
        if ($request->session()->has('email')) {
            $email = $request->session()->get('email');
        } else if ($request->session()->get('email2')) {
            $email = $request->session()->get('email2');
        }
        $user=Logare::where('email',$email)->firstOrFail();
        $imageUrl = Storage::url($user->image);
        $backgroundImageUrl = Storage::url($user->background_image);
        return view('index',compact('user','imageUrl'));
    }

    public function broadcast(Request $request)
    {
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request)
    {
        return view('receive', ['message' => $request->get('message')]);
    }
}
