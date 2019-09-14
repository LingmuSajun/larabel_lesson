<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostsController extends Controller
{
    public function index() {
        // $posts = \App\Post::all();
        // $post = Post::all();
        // $post = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        // $posts = [];
        // dd($post->toArray()); // dump die
        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index')->with('posts', $posts);
    }
}
