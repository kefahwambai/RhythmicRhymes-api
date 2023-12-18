<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePoemRequest;
use App\Http\Requests\UpdatePoemRequest;
use App\Models\Poem;

class PoemController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Poem::all();
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
    public function store(StorePoemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Poem $poem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poem $poem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePoemRequest $request, Poem $poem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poem $poem)
    {
        //
    }
}
