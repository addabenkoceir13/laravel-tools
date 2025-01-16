<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\blogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function store(Request $request)
    {
        blogPost::create([
            'title'     => $request->title,
            'body'      => $request->content,
            'source'    => auth()->id() 
        ]);
    }
}
