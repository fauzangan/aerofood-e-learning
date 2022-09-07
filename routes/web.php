<?php

use App\Http\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardCourseController;
use App\Http\Controllers\DashboardFeedbackController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SuperAdminController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get("/course/{course}",[CoursesController::class, 'getCourse']);

Route::get('/feedback',[FeedbackController::class,'index']);
Route::post('/feedback',[FeedbackController::class, 'store']);
Route::resource('/dashboard/feedbacks', DashboardFeedbackController::class)->except(['create', 'edit', 'update'])->middleware('auth');

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store']);

Route::resource('/dashboard/courses', DashboardCourseController::class)->middleware('auth')->middleware('auth');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('auth');
Route::get('/dashboard/categories/fillSlug', [DashboardCategoryController::class, 'fillSlug']);

Route::resource('/dashboard/users', SuperAdminController::class)->except(['show','edit','update'])->middleware('auth');

Route::get('/dashboard/changepassword',[ChangePasswordController::class, 'index'])->middleware('auth');
Route::post('/dashboard/changepassword',[ChangePasswordController::class, 'changePassword'])->middleware('auth');


