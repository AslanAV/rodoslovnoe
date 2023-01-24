<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhoneNumbersRequest;
use App\Http\Requests\UpdatePhoneNumbersRequest;
use App\Models\PhoneNumbers;

class PhoneNumbersController extends Controller
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
     * @param  \App\Http\Requests\StorePhoneNumbersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhoneNumbersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhoneNumbers  $phoneNumbers
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneNumbers $phoneNumbers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhoneNumbers  $phoneNumbers
     * @return \Illuminate\Http\Response
     */
    public function edit(PhoneNumbers $phoneNumbers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhoneNumbersRequest  $request
     * @param  \App\Models\PhoneNumbers  $phoneNumbers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhoneNumbersRequest $request, PhoneNumbers $phoneNumbers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhoneNumbers  $phoneNumbers
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneNumbers $phoneNumbers)
    {
        //
    }
}
