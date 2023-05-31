<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Search;
use App\Http\Controllers\Users;
use App\Models\User;
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

// Route::get('user',function(){
//    //$user=User::findOrFail(4);
// //    if(!$user){
// //     return abort(404);
// //    }
// // $arr=[2,34,64,321,341];
// // $user =User::find($arr,['id','name']);

// // $user =User::where('id',1)->get();
// $user =User::where('id',1)->first();


// dd($user);

//    return $user;
// })->name('user');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('search/{model}',Search::class)->name('user-search');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('test',[Users::class,'test'])->name('user.test');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
