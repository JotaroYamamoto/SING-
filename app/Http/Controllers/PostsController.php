<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $posts=Post::orderBy('created_at','desc')
            ->simplePaginate(20);
        $param=['posts'=>$posts,'input'=>'','user' =>$user];
        return view('posts.index',$param);
    }
    public function add(Request $request)
    {
        return view('posts.add',['input'=>'']);
    }
    public function create(Request $request)
    {
        $post = new Post;
        $form =$request->all();
        unset($form['_token']);
        $post->user_id = $request->user()->id;
        $post->title=$request->title;
        $post->composer=$request->composer;
        $post->url=$request->url;
        $post->lyrics=$request->lyrics;
        $post->image=$request->image;
        $post->point=$request->point;
        $post->save();
        return redirect('/');
    }
    public function show(Request $request)
    {
        $post=Post::find($request->id);
        $user = Auth::user();
        $param=['post'=>$post,'input'=>'','user' =>$user];
        return view('posts.show',$param);
    }
    public function edit(Request $request)
    {
        $post=Post::find($request->id);
        $param=['post'=>$post,'input'=>''];
        return view('posts.edit',$param);
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
        $post->image=$request->image;
        $post->point=$request->point;
        $post->save();
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $post=Post::find($request->id);
        $param=['post'=>$post,'input'=>''];
        return view('posts.del',$param);
    }
    public function remove(Request $request)
    {
        Post::find($request->id)->delete();
        return redirect('/');
    }
    public function find(Request $request)
    {
        return view('posts/find',['input'=>'']);

    }
    public function search(Request $request)
    {
        $posts = Post::where('title',$request->input)->get();
        $param =['input'=>$request->input,'posts'=>$posts];
        return view('posts.find',$param);
    }
    public function mypage()
    {
        $user = Auth::user();
        $posts=Post::orderBy('created_at','desc')
            ->simplePaginate(20);
        $param=['posts'=>$posts,'input'=>'','user' =>$user];
        return view('posts.mypage',$param);
    }
    public function userpage(Request $request)
    {
        $user = User::find($request->id);
        $posts=Post::orderBy('created_at','desc')
            ->simplePaginate(20);
        $param=['posts'=>$posts,'input'=>'','user' =>$user];
        return view('posts.userpage',$param);        
    }
}
