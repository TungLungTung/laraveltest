<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

// Page Controller
// views/main
Route::get('/',[PageController::class,'index'])->name('main.index');
Route::get('/about',[PageController::class,'about'])->name('main.about');


// POSTS endpoints
Route::get('/posts',[PostController::class,'index'])->name('main.posts.index');


// CAR
Route::resource('/cars', CarController::class);

// Laravel.test
// Route::get('/',[HomeController::class,'index'])->name('main.home');
// Route::get('/about',[HomeController::class,'about'])->name('main.about');

// Pattern là kiểu integer
// Route::get('products/{id}',[ProductController::class,'show'])->where('id','[0-9]+')->name('main.products.show');

// Pattern là kiểu string
// Route::get('products/{name}',[ProductController::class,'show'])->where([
//             'name' => '[a-zA-Z]+',
//         ])->name('main.products.show');


