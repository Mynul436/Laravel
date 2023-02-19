<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ParentcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserCategoryAccessController;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\UserCategoryAccess;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
// $cas=UserCategoryAccess::where('customer_id','>',5)
// ->pluck('accessable_category');
// $cas=UserCategoryAccess::where('customer_id','>',5)
// ->get();    
//return $cas;
//$pro=Category::all('id');

//return $pro;
// $user=Customer::get('id');
//return $user;
// $cat = Category::where ('id',$user)->get();

// return $cat;
//dd($cas);
//$pro=Product::whereIn('category_id',$cas[0][0])->get();
 //return $pro;
//  $allCategory = Category::get()->pluck('id')->random(30);
// dd($allCategory);
//  return $allCategory;
//  UserCategoryAccess::where('customer_id',1)->update([
//     'accessable_category'=>json_encode($allCategory)
//  ]);

// $cast =  UserCategoryAccess::where('customer_id',1)->first();

// $cast1=UserCategoryAccess::where('accessable_category',1);
//dd($cast1);
//return $cast;

 //return $cast->accessable_category;
 //$c=$cast->accessable_category;

//  $a=Customer::get('id');
//  $ast2=Customer::whereIn('id',$cast)->get()  ;

// return $ast2;
//dd($allCategory,gettype($cast->accessable_category));

//new 
// $users = UserCategoryAccess::
// where('accessable_category', 4)->get('id');
//dd($users);
$s=DB::select('describe user_category_accesses');


//return $s;
$allCategory = Category::get()->pluck('id')->random(1);
//echo gettype($allCategory);

 $q=UserCategoryAccess::get();

 
 
 //return $q;
// echo gettype($q);
//dd($q);
// $users = UserCategoryAccess::select('customer_id')
// ->whereIn('accessable_category',[$allCategory])->get() ;
//return $users;


// $allCategory = Category::get()->pluck('id')->random(1);
// $users = UserCategoryAccess::select('customer_id')
// ->whereIn([ 'accessable_category'=>json_encode('4')])->get() ;
// dd($users);
// $results = DB::table('user_category_accesses')
//                 ->whereJsonContains('accessable_category->category_id',[[13]] )
//                 ->get();

//  return $results ;

// return UserCategoryAccess::all();

// $category_id = Product::where('id',30)->value('category_id');

$category_id = Category::where('id',30)->value('id');

//dd($category_id);
$users = [];
//    dd($category_id);
 $access_category = UserCategoryAccess::get();
 //echo ($access_category);
           foreach($access_category as $cat){
            dd(json_decode( $cat['accessable_category']));
               if(in_array($category_id,json_decode( $cat['accessable_category']))){
                   $users[] = $cat['customer_id'];
               }
              

 }
 dd($users);



}


);

Route::get('/at',[CustomerController::class,'at']);

Route::get('/col',[CollectionController::class,'collection']);


Route::get('test',[StudentController::class,'test']);

Route::get('add-song',[SongController::class,'add_song']);