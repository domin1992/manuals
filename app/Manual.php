<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $fillable = [
        'name', 'link_rewrite'
    ];

    public function link($absolute = false){
        $link = '/'.$this->id.'-'.$this->link_rewrite;
        if($absolute)
            return env('APP_URL').$link;
        else
            return $link;
    }
}
