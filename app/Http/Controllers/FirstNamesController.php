<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFirstNamesRequest;
use App\Http\Requests\UpdateFirstNamesRequest;
use App\Models\FirstNames;

class FirstNamesController extends Controller
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
     * @param  \App\Http\Requests\StoreFirstNamesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFirstNamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstNames  $firstNames
     * @return \Illuminate\Http\Response
     */
    public function show(FirstNames $firstNames)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstNames  $firstNames
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstNames $firstNames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFirstNamesRequest  $request
     * @param  \App\Models\FirstNames  $firstNames
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFirstNamesRequest $request, FirstNames $firstNames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstNames  $firstNames
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstNames $firstNames)
    {
        //
    }
}
