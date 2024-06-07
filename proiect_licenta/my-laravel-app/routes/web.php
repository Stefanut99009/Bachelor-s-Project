<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/mainpage', function () {
    return view('mainpage');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/', function () {
    return view('register_login');
});
Route::get('/register_login', function () {
    return view('register_login');
});
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

Route::get('/socialmedia', function () {
    return view('socialmedia');
});
Route::get('/talkpage', function () {
    return view('talkpage');
});
Route::get('/todopage', function () {
    return view('todopage');
});
Route::get('/userpage', function () {
    return view('userpage');
});
Route::get('/watchvideo', function () {
    return view('watchvideo');
});

