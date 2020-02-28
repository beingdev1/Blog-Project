<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.show', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();

        $categories = category::all();

        return view('admin.post.post', compact('tags', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //here we store the data from the form  in database , so route must be post.store

        //return $request->all();

        //lets validate the form

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            //jus to check//  return $request->image->getClientOriginalName();

            $imageName =  $request->image->store('public');
        }

        //conneting with database we need model
        $post = new post; //sidenote::  the model first letter must be capital

        $post->image = $imageName;

        $post->title = $request->title;

        $post->subtitle = $request->subtitle;

        $post->slug = $request->slug;

        $post->body = $request->body;


        $post->save();

        $post->tags()->sync($request->tags);

        $post->categories()->sync($request->categories);


        //redirect page

        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //shows only one data so put in index
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //for edit create new file

        //to show the previous data and we use first instead of get
        $post = post::where('id', $id)->first();

        $tags = tag::all();

        $categories = category::all();

        return view('admin.post.edit', compact('tags', 'categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            //we wana grab image
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {

            //jus to check//  return $request->image->getClientOriginalName();

            $imageName =  $request->image->store('public');
        }
        //conneting with database we need model
        $post = post::find($id); //we need id as id is passed
        //sidenote::  the model first letter must be capital

        $post->image = $imageName;

        $post->title = $request->title;

        $post->subtitle = $request->subtitle;

        $post->slug = $request->slug;

        $post->body = $request->body;

        $post->tags()->sync($request->tags);

        $post->categories()->sync($request->categories);

        $post->save();

        //redirect page

        return redirect(route('post.index'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id', $id)->delete();

        return \redirect()->back();
    }
}
