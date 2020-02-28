<?php

namespace App\Model\user;




use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //create relationship

    public function tags()
    {
        return $this->belongsToMany('App\Model\user\tag', 'post_tags')->withTimestamps(); //same as database name is needed
    }

    public function categories()
    {
        return $this->belongsToMany('App\Model\user\category', 'category_posts')->withTimestamps(); //same as database name is needed
    }

    public function getRouteKeyName()
    {
        return 'slug'; //laravel now wat to get the post via slug
    }
}
