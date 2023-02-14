<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\Car1Controller;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CsvController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('addcustomer',[CustomerController::class,'add_customer']);

// Route::get('showmobile/{id}',[CustomerController::class,'show_mobile']);

// Route::get('add-author',[AuthorController::class,'add_author']);
// Route::get('add-post/{id}',[PostController::class,'add_post']);
// Route::get('show-post/{id}',[PostController::class,'show_post']);
// Route::get('show-author/{id}',[AuthorController::class,'show_author']);
// Route::get('index/{id}',[IndexController::class,'index']);

// Route::get('comment/{id}',[CommentController::class,'add_comment']);

// //Route::get('show-comment/{id}/{id1}',[CommentController::class,'show_comment']);
// Route::get("data", [CsvControllercd::class, "index"]);

Route::resource( '/cars',Car1Controller::class);