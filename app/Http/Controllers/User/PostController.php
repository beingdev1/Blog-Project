<?php

namespace App\Http\Controllers\User;

use App\Model\user\post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(post $post)
    {
        //first tell laravel about taking slug in model
        return view('user.post', compact('post'));
    }
}
