<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home',[
        'title' => 'Homepage',
        'active' => 'homepage'
    ]);
});

Route::get('/profile', function(){
    return view('profile',[
        "title" => "Profile",
        'active' => 'profile',
        "name" => "Fauzan Zaman",
        "email" => "fauzan12356@gmail.com",
        "image" => "fauzan.jpg"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        'title' => 'About Us',
        'active' => 'about'
    ]);
});

Route::get('/category', [CoursesController::class, 'index']);

Route::get('/category/{category:slug}',[CoursesController::class, 'show']);
Route::get('/course/{course:slug}',[CoursesController::class, 'getCourse']);

Route::get('/feedback',[FeedbackController::class,'index']);

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
