<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;

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

//     $phone =User::find(1);
//    // $phone =User::find(1)->phone;

//      return $phone;

    $users =User::all();
    $phones=Phone::all();
   // return $phones;
//return $users;



//$posts =Post::find(1)->comment;
//return $posts;

$comment=Comment::all();

//return $post;
//return $comment;

$posts =Post::all();


   // return view('welcome',compact('users'));

  return view('postc',compact('posts'));






//   $table->id();
//   $table->string('title');
//   $table->string('user_id');
//   $table->timestamps();

});
