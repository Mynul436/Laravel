<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index($id){

        $author=Author::find($id);
        // var_dump($author);
        // var_dump($author->username);
//dd($author->post);

              foreach ($author->post as $post) {
               // echo $post->title;
                echo '<pre>';
                print_r($post);

                echo '</pre>';

              }

         return $author;

    }

//     public function Index($id){

//         $author=Author::find($id);
//         // var_dump($author);
//         // var_dump($author->username);
// //dd($author->post);

//               foreach ($author->post as $post) {
//                // echo $post->title;
//                 echo '<pre>';
//                 print_r($post);

//                 echo '</pre>';

//               }

//          return $author;

//     }


}
