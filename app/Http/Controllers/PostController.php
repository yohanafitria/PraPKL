<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        //select * from post;
        $post = Post::all();
        return view('post.index', compact('post'));
    }
}
