<?php

use App\Http\Controllers\ProfileController;
<<<<<<< HEAD
use App\Http\Controllers\UserPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\YourController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TalkPageController;
use App\Http\Controllers\ToDoPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WatchVideoController;
use App\Http\Controllers\OtherController;

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::get('/download', [DownloadController::class, 'download'])->name('download');

Route::get('/mainpage', [MainPageController::class, 'mainpage'])->name('mainpage');
Route::get('/post', [PostController::class, 'post'])->name('post');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/socialmedia', [SocialMediaController::class, 'socialmedia'])->name('socialmedia');
Route::get('/talkpage', [TalkPageController::class, 'talkpage'])->name('talkpage');

Route::get('/todopage', [ToDoPageController::class, 'todopage'])->name('todopage');
Route::get('/userpage', [UserPageController::class, 'userpage'])->name('userpage');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/watchvideo', [WatchVideoController::class, 'watchvideo'])->name('watchvideo');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

=======
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

>>>>>>> e5b14b87ea5ce3aa45dc33eedaea8feae6151573
require __DIR__.'/auth.php';
