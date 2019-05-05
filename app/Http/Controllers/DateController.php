<?php

namespace App\Http\Controllers;

use App\Concert;
use App\Date;
use Egulias\EmailValidator\Exception\DotAtEnd;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dates = new Date();
        $concerts = Concert::pluck('name_concert','id');
        return view('dates.create',compact('dates','concerts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Date::create($request->all());
        $concert = Concert::pluck('name_concert','id');
        return redirect()->route('concerts.show',['date'=>$date,'concert'=>$concert]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $date = Date::findOrFail($id);
        return view('dates.show',['date'=>$date]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $date = Date::findOrFail($id);
        $concert = Concert::pluck('name_concert','id');
        return view('artistes.edit',compact('date','concert'));
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
        $date = Date::findOrFail($id);
        $date->update($request->all());
        return redirect()->route('dates.show',['date'=>$date]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
