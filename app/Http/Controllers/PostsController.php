<?php

namespace App\Http\Controllers;

use App\Models\Posts;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Posts::orderBy('id', 'desc')->get();

        if( $posts ){
            return view('posts.posts',[
                "posts" => $posts
            ]);
        }
    }
    public function creator($id) {
        $post = Posts::find($id);
        if( $post ){
            $creator = $post->creator;
            // dd( $creator );
            return view('posts.creator', [
                "creator" => $creator
            ]);
        }
    }
}
