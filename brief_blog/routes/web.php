<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});




Route::get('/',[HomeController::class,'home']);

Route::get('/admin/login',[AdminController::class,'login']);
Route::post('/admin/login',[AdminController::class,'submit_login']);
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::resource('admin/category',CategoryController::class);

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

// posts
Route::get('/post', function () {
    return view('admin/post/index');
});
Route::get('/post/destroy', function () {
    return view('admin/post/destroy');
});


// comments
Route::get('/comment', function () {
    return view('admin/comment/index');
});
Route::get('/comment/destroy', function () {
    return view('admin/comment/destroy');
});


// users
Route::get('/user', function () {
    return view('admin/user/index');
});
Route::get('/user/destroy', function () {
    return view('admin/user/destroy');
});


Route::get('/home', function () {
    return view('home');
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/user/login',[UserController::class,'login']);
Route::post('/user/login',[UserController::class,'submit_login']);
Route::get('/user/dashboard',[UserController::class,'dashboard']);
Route::get('/dashboard', function () {
    return view('user/dashboard');
});
