<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStreetsRequest;
use App\Http\Requests\UpdateStreetsRequest;
use App\Models\Streets;

class StreetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreStreetsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreetsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Streets  $streets
     * @return \Illuminate\Http\Response
     */
    public function show(Streets $streets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Streets  $streets
     * @return \Illuminate\Http\Response
     */
    public function edit(Streets $streets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreetsRequest  $request
     * @param  \App\Models\Streets  $streets
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreetsRequest $request, Streets $streets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Streets  $streets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Streets $streets)
    {
        //
    }
}
