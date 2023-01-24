<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLastNamesRequest;
use App\Http\Requests\UpdateLastNamesRequest;
use App\Models\LastNames;

class LastNamesController extends Controller
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
     * @param  \App\Http\Requests\StoreLastNamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLastNamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LastNames  $lastNames
     * @return \Illuminate\Http\Response
     */
    public function show(LastNames $lastNames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LastNames  $lastNames
     * @return \Illuminate\Http\Response
     */
    public function edit(LastNames $lastNames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLastNamesRequest  $request
     * @param  \App\Models\LastNames  $lastNames
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLastNamesRequest $request, LastNames $lastNames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LastNames  $lastNames
     * @return \Illuminate\Http\Response
     */
    public function destroy(LastNames $lastNames)
    {
        //
    }
}
