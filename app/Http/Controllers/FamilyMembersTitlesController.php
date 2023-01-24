<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFamilyMembersTitlesRequest;
use App\Http\Requests\UpdateFamilyMembersTitlesRequest;
use App\Models\FamilyMembersTitles;

class FamilyMembersTitlesController extends Controller
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
     * @param  \App\Http\Requests\StoreFamilyMembersTitlesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFamilyMembersTitlesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FamilyMembersTitles  $familyMembersTitles
     * @return \Illuminate\Http\Response
     */
    public function show(FamilyMembersTitles $familyMembersTitles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FamilyMembersTitles  $familyMembersTitles
     * @return \Illuminate\Http\Response
     */
    public function edit(FamilyMembersTitles $familyMembersTitles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFamilyMembersTitlesRequest  $request
     * @param  \App\Models\FamilyMembersTitles  $familyMembersTitles
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFamilyMembersTitlesRequest $request, FamilyMembersTitles $familyMembersTitles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FamilyMembersTitles  $familyMembersTitles
     * @return \Illuminate\Http\Response
     */
    public function destroy(FamilyMembersTitles $familyMembersTitles)
    {
        //
    }
}
