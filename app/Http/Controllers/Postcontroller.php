<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function index()
    {
        $post = Post::all();

        $data = [
            'post' => $post,
            'title' => 'Blog Page'
        ];

        return view('posts', $data);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post', compact(['post']));
    }
}
