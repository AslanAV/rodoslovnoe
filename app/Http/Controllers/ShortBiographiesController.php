<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShortBiographiesRequest;
use App\Http\Requests\UpdateShortBiographiesRequest;
use App\Models\ShortBiographies;

class ShortBiographiesController extends Controller
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
     * @param  \App\Http\Requests\StoreShortBiographiesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShortBiographiesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortBiographies  $shortBiographies
     * @return \Illuminate\Http\Response
     */
    public function show(ShortBiographies $shortBiographies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortBiographies  $shortBiographies
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortBiographies $shortBiographies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShortBiographiesRequest  $request
     * @param  \App\Models\ShortBiographies  $shortBiographies
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShortBiographiesRequest $request, ShortBiographies $shortBiographies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortBiographies  $shortBiographies
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortBiographies $shortBiographies)
    {
        //
    }
}
