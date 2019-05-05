<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\Concert;
use App\Date;
use App\Panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ConcertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $concert = Concert::all();
        $date = Date::pluck('date','id');
        return view('concerts.index',['concerts'=>$concert,'dates'=>$date]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concert = new Concert();
        $category = Category::pluck('name','id');
        return view('concerts.create',compact('concert','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $concert = Concert::create($request->all());
        $date = Date::pluck('date','id');
        $concert->artistes()->sync($request->get('artists'));
        //$concert->category()->sync($request->get('categories'));
        return redirect()->route('concerts.show',['concerts'=>$concert,'dates'=>$date]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $concert = Concert::findOrFail($id);
        return view('concerts.show',['concert'=>$concert]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $concert = Concert::findOrFail($id);
        $category = Category::pluck('name','id');
        return view('concerts.edit',compact('concert','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $concert = Concert::findOrFail($id);
        $concert->artistes()->sync($request->get('artists'));
        $concert->category()->sync($request->get('categories'));
        $concert->update($request->all());
        return redirect()->route('concerts.show',['concert'=>$concert]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Concert  $concert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Concert::destroy($id);
        return redirect()->route('concerts.index');
    }

}
