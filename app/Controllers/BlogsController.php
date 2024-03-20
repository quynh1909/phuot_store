<?php

namespace App\Controllers;
use App\Models\Post;

class BlogsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $this->sendPage('blog', [
            'posts' => $posts
        ]);
    }

}