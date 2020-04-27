<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    //
    // この中に入るリクエストはhiddenのpost_idと入力されたmessage
    public function store(Request $request){
        $params = $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_id' =>'required|exists:posts,user_id',
            'message' => 'required|max:2000',
        ]);
        $post = Post::findOrFail($params['post_id']);
        // return $params;
        $post->comments()->create($params);
        return back();
    }
    // public function getData(Request $request)
    // {
    //     $comments=Post::find($request->id)->comments;
    //     $json=['comments'=>$comments];
    //     return response()->json($json);
    // }
}
