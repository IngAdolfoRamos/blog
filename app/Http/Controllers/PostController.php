<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showAllPosts()
    {
        $posts = Post::all();
        return view('posts.posts',compact('posts'));
    }
}
