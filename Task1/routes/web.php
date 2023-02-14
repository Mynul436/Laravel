<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ParentcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserCategoryAccessController;
use App\Models\Category;
use App\Models\Product;
use App\Models\UserCategoryAccess;
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
Route::get('show-accessable-category',[UserCategoryAccessController
::class,'show_accessable_category']);


Route::get('customer-rend-cat-assigne',function(){
 $allCategory = Category::get()->pluck('id')->random(30);
//dd($allCategory);
 //return $allCategory;
 UserCategoryAccess::where('customer_id',1)->update([
    'accessable_category'=>json_encode($allCategory)
 ]);

$cast =  UserCategoryAccess::where('customer_id',1)->first();

//dd($allCategory,gettype($cast->accessable_category));

});
