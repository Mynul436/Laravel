<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function add_comment($id){

        
// $author=new Author();
// $author=Author::find($id);
// $post=new Post();
// $post->title='Title 2';
// $post->cat='Cat 2';
// $author->post()->save($post);




$post=new Post();
$post=Post::find($id);
$cmt=new Comment();
$cmt->comment='This is comment';
$post->comment()->save($cmt);
        
}



//get comment by author id
public function show_comment($id,$id1){
    $psot=Author::find($id)->Post::find($id1)->comment;
 return $psot;
}

}