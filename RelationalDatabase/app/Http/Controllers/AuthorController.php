<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function add_author(){
        $author=new Author();
        // $author->username='mynul';
        // $author->password='123';
        // $author->save();

        // $author->username='kanon';
        // $author->password='123';
        // $author->save();

        // $author->username='soad';
        // $author->password='123';
        // $author->save();

       $author->username='saikoth';
        $author->password='123';
       
        $author->save();

    }
//get author by post id
    public function show_author($id){
        $author=Post::find($id)->author;
        return $author;
      
}
}
