<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //tag can be in many post n post can have many tags
    public function posts()
    {
        return $this->belongsToMany('App\Model\user\post', 'post_tags');
    }
}
