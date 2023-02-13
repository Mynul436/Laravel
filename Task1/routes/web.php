<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ParentcategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('add-parent-category',[ParentcategoryController::class,'add_parent_category']);
Route::get('add-category',[CategoryController::class,'add_category']);

Route::get('add-product',[ProductController::class,'add_product']);