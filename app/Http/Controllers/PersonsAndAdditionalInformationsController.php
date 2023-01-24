<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonsAndAdditionalInformationsRequest;
use App\Http\Requests\UpdatePersonsAndAdditionalInformationsRequest;
use App\Models\PersonsAndAdditionalInformations;

class PersonsAndAdditionalInformationsController extends Controller
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
     * @param  \App\Http\Requests\StorePersonsAndAdditionalInformationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePersonsAndAdditionalInformationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonsAndAdditionalInformations  $personsAndAdditionalInformations
     * @return \Illuminate\Http\Response
     */
    public function show(PersonsAndAdditionalInformations $personsAndAdditionalInformations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonsAndAdditionalInformations  $personsAndAdditionalInformations
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonsAndAdditionalInformations $personsAndAdditionalInformations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePersonsAndAdditionalInformationsRequest  $request
     * @param  \App\Models\PersonsAndAdditionalInformations  $personsAndAdditionalInformations
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePersonsAndAdditionalInformationsRequest $request, PersonsAndAdditionalInformations $personsAndAdditionalInformations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonsAndAdditionalInformations  $personsAndAdditionalInformations
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonsAndAdditionalInformations $personsAndAdditionalInformations)
    {
        //
    }
}
