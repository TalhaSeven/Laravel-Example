<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function newBlog()
    {
        $blogContent = [
            [
                'title' => 'My first blog post',
                'content' => 'This is my first blog post'
            ],
            [
                'title' => 'My second blog post',
                'content' => 'This is my second blog post'
            ],
            [
                'title' => 'My third blog post',
                'content' => 'This is my third blog post'
            ]
        ];
        return view('blog', compact('blogContent'));
    }
}
