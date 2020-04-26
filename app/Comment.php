<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable=['post_id','message'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
    public function comment(){
        return $this->belongsTo('App\User');
    }
    
}
