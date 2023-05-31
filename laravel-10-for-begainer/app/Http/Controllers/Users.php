<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Users extends Controller
{
    //
    public function test()
    {
      //  dd('ok');
        DB::enableQueryLog();
         $user=User::find(1)->posts;
         echo "<pre>";
        // print_r($user);  
        dump($user);
         echo "</pre>";
        $userIds = [1, 2, 4];
        $users = User::whereIn('id', $userIds)->with('posts')->get();

        
        //dd($q);

        foreach ($users as $user) {
          $posts = $user->posts;
          echo "<pre>";
          echo $posts;
          echo "</pre>";
          }

          $posts=Post::whereUserId(1)->get();
       //   dd($posts);
        $q= DB::getQueryLog();
          dd($q);
     
    }
}