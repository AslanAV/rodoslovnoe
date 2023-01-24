<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomesRequest;
use App\Http\Requests\UpdateHomesRequest;
use App\Models\Homes;

class HomesController extends Controller
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
     * @param  \App\Http\Requests\StoreHomesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function show(Homes $homes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function edit(Homes $homes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomesRequest  $request
     * @param  \App\Models\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomesRequest $request, Homes $homes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homes  $homes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homes $homes)
    {
        //
    }
}
