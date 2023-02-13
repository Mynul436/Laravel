<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //

    public function add_post($id){

$author=new Author();
$author=Author::find($id);
$post=new Post();
$post->title='Title 2';
$post->cat='Cat 2';
$author->post()->save($post);

    }
//get post by author id
    public function show_post($id){
        $psot=Author::find($id)->post;
     return $psot;
      
}
}