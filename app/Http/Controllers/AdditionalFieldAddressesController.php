<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdditionalFieldAddressesRequest;
use App\Http\Requests\UpdateAdditionalFieldAddressesRequest;
use App\Models\AdditionalFieldAddresses;

class AdditionalFieldAddressesController extends Controller
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
     * @param  \App\Http\Requests\StoreAdditionalFieldAddressesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdditionalFieldAddressesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdditionalFieldAddresses  $additionalFieldAddresses
     * @return \Illuminate\Http\Response
     */
    public function show(AdditionalFieldAddresses $additionalFieldAddresses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdditionalFieldAddresses  $additionalFieldAddresses
     * @return \Illuminate\Http\Response
     */
    public function edit(AdditionalFieldAddresses $additionalFieldAddresses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdditionalFieldAddressesRequest  $request
     * @param  \App\Models\AdditionalFieldAddresses  $additionalFieldAddresses
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdditionalFieldAddressesRequest $request, AdditionalFieldAddresses $additionalFieldAddresses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdditionalFieldAddresses  $additionalFieldAddresses
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdditionalFieldAddresses $additionalFieldAddresses)
    {
        //
    }
}
