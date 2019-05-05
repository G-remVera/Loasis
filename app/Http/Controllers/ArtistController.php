<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\Tag;
use Illuminate\Cache\TagSet;
use Illuminate\Http\Request;

use Illuminate\Validation\Validator;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artiste = Artist::with('category')->get();
        return view('artistes.index',['artistes'=>$artiste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artiste = new Artist();
        $category = Category::pluck('name','id');
        return view('artistes.create',compact('artiste','category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $artiste = Artist::create($request->all());
        $tag = Tag::pluck('name','slug');
        $artiste->tags()->sync($request->get('tags'));
        return redirect()->route('artistes.show',['artiste'=>$artiste,'tag'=>$tag]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artist  $artiste
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artiste = Artist::findOrFail($id);
        return view('artistes.show',['artiste'=>$artiste]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artist  $artiste
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artiste = Artist::findOrFail($id);
        $categories = Category::pluck('name','id');
        return view('artistes.edit',compact('artiste','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artist  $artiste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $artiste = Artist::find($id);
        /*$this->validate($request ,[
            'name'=>'required',
            'biography'=>'required',
            'logo'=>'required',
            'instagram'=>'required',
            'facebook'=>'required',
            'youtube'=>'required',
            'bandcamp'=>'required',
            'siteweb'=>'required',
        ]);*/
        $artiste->update($request->all());
        $artiste->tags()->sync($request->get('tags'));
        return redirect()->route('artistes.show',['artiste'=>$artiste])->with('success','Post updated successfully');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artist  $artiste
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artist::destroy($id);
       return redirect()->route('artistes.index');
    }
}
