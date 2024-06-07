<?php

namespace App\Http\Controllers;

use App\Models\welcomepage;
use App\Http\Requests\StorewelcomepageRequest;
use App\Http\Requests\UpdatewelcomepageRequest;
use Illuminate\Http\Request;

class WelcomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $welcomepages = welcomepage::all();
        return view('Welcomepage', compact('welcomepages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create_welcomepage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorewelcomepageRequest $request)
    {
        $validatedData = $request->validated();
        welcomepage::create($validatedData);

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(welcomepage $welcomepage)
    {
        return view('user.show_welcomepage', compact('welcomepage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(welcomepage $welcomepage)
    {
        return view('user.edit_welcomepage', compact('welcomepage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewelcomepageRequest $request, welcomepage $welcomepage)
    {
        $validatedData = $request->validated();
        $welcomepage->update($validatedData);

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(welcomepage $welcomepage)
    {
        $welcomepage->delete();

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page deleted successfully!');
    }
}
