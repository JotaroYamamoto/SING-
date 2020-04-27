<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    // fillableに保存したいデータを記入しないといけない(fillable=>記入可能)
    protected $fillable=['post_id','message','user_id'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
