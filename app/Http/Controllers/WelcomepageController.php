<?php

namespace App\Http\Controllers;

use App\Models\Welcomepage;
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
        $welcomepages = Welcomepage::all();
        return view('user.welcomepage', compact('welcomepages'));
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
        Welcomepage::create($validatedData);

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcomepage $welcomepage)
    {
        return view('user.show_welcomepage', compact('welcomepage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcomepage $welcomepage)
    {
        return view('user.edit_welcomepage', compact('welcomepage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewelcomepageRequest $request, Welcomepage $welcomepage)
    {
        $validatedData = $request->validated();
        $welcomepage->update($validatedData);

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcomepage $welcomepage)
    {
        $welcomepage->delete();

        return redirect()->route('welcomepage.index')->with('success', 'Welcome Page deleted successfully!');
    }
}
