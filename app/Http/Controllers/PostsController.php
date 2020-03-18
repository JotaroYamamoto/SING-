<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index()
    {
        $posts=Post::simplePaginate(20);
        return view('posts.index',['posts'=>$posts]);
    }
    public function add(Request $request)
    {
        return view('posts.add');
    }
    public function create(Request $request)
    {
        $post = new Post;
        $form =$request->all();
        unset($form['_token']);
        $post->title=$request->title;
        $post->composer=$request->composer;
        $post->url=$request->url;
        $post->lyrics=$request->lyrics;
        $post->url=$request->url;
        $post->image=$request->image;
        $post->point=$request->point;
        $post->save();
        return redirect('/posts');
    }
    public function show(Request $request)
    {
        $post=Post::find($request->id);
        return view('posts.show',['form'=>$post]);
    }
    public function edit(Request $request)
    {
        $post=Post::find($request->id);
        return view('posts.edit',['form'=>$post]);
    }
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $post->title=$request->title;
        $post->composer=$request->composer;
        $post->url=$request->url;
        $post->lyrics=$request->lyrics;
        $post->url=$request->url;
        $post->image=$request->image;
        $post->point=$request->point;
        $post->save();
        return redirect('/posts');
    }
    public function delete(Request $request)
    {
        $post=Post::find($request->id);
        return view('posts.del',['form'=>$post]);
    }
    public function remove(Request $request)
    {
        Post::find($request->id)->delete();
        return redirect('/posts');
    }
    
}
