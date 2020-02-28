<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\user\tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show every data in the table of view
        $tags = tag::all();
        return view('admin.tag.show', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        //lets validate
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        //connecting with database we need model
        $tag = new tag;

        $tag->name = $request->name;

        $tag->slug = $request->slug;

        $tag->save();

        //redirect

        return redirect(route('tag.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $tag = tag::where('id', $id)->first();
        return view('admin.tag.edit', compact('tag'));
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
        //copy all of store
        //lets validate
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
        //connecting with database we need model
        $tag = tag::find($id);

        $tag->name = $request->name;

        $tag->slug = $request->slug;

        $tag->save();

        //redirect

        return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tag::where('id', $id)->delete();

        return \redirect()->back();
    }
}
