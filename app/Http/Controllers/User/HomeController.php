<?php
//  for page of about and contact such page
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $posts = post::all();
        return view('user.blog', compact('posts')); // returning the homepage

    }
}
