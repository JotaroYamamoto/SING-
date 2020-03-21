<?php

namespace App;
use cebe\markdown\Markdown as Markdown;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
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
        return $this->belongsTo('App\User');
    }
    
}
