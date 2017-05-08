<?php

namespace YoungLife\Http\Controllers;

use Illuminate\Http\Request;

class CampController extends Controller
{
     public function index( Camp $camp)
    {
        $uri = $camp->path();
        $camps = Camp::all();
        return view('$uri',compact('camps'));
    }


    public function create()
    {
        //
        return view('camp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \YoungLife\Camp  $camp
     * @return \Illuminate\Http\Response
     */
    public function show(Camp $camp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \YoungLife\Camp  $camp
     * @return \Illuminate\Http\Response
     */
    public function edit(Camp $camp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \YoungLife\Camp  $camp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camp $camp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \YoungLife\Camp  $camp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Camp $camp)
    {
        //
    }
}
