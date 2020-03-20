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
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
