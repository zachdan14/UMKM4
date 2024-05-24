<?php

namespace App\Http\Controllers;

use App\Models\welcomepage;
use App\Http\Requests\StorewelcomepageRequest;
use App\Http\Requests\UpdatewelcomepageRequest;

class WelcomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.welcomepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewelcomepageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(welcomepage $welcomepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(welcomepage $welcomepage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewelcomepageRequest $request, welcomepage $welcomepage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(welcomepage $welcomepage)
    {
        //
    }
}
