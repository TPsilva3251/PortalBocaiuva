<?php

namespace App\Http\Controllers;

use App\Fashions;
use Illuminate\Http\Request;

class FashionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fashions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Fashions  $fashions
     * @return \Illuminate\Http\Response
     */
    public function show(Fashions $fashions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fashions  $fashions
     * @return \Illuminate\Http\Response
     */
    public function edit(Fashions $fashions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fashions  $fashions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fashions $fashions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fashions  $fashions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fashions $fashions)
    {
        //
    }
}
