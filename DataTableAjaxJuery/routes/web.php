<?php


use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });  

Route::get('/', function () {


    
    return view('turorial');
});  

Route::match(['get','post'],'/categories/create',[CategoryController::class,'create']);

Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');

// Route::match('get','post','/')
