<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        return view('posts.index');
    }
    public function new()
    {
        return view('posts.new');
    }
    public function show()
    {
        return view('posts.show');
    }
}
