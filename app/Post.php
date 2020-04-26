<?php

namespace App;
use cebe\markdown\Markdown as Markdown;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Like;

class Post extends Model
{
    //
    protected $guarded = array('id');

    protected $fillable = ['title','body','summary','user_id'];
    
    public static $rules =array(
        'title'=>'required',
        'composer'=>'required',
        'lyrics' =>'required'
    );

    public function parse()
    {
        $parser = new Markdown();
        return $parser->parse($this->lyrics);
    }
    public function getMarkBodyAttribute() {
        return $this->parse();
    }
    public function parse2()
    {
        $parser = new Markdown();
        return $parser->parse($this->point);
    }
    public function getMarkBody2Attribute() {
        return $this->parse2();
    }
    public function parse3()
    {
        $parser = new Markdown();
        return $parser->parse($this->url);
    }
    public function getMarkBody3Attribute() {
        return $this->parse3();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function like_by()
    {
        return Like::where('user_id', Auth::user()->id)->first();
    }

}
