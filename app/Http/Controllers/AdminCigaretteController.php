<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Http\Requests\StoreCigaretteRequest;
use App\Http\Requests\UpdateCigaretteRequest;

class AdminCigaretteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCigaretteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cigarette $cigarette)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cigarette $cigarette)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCigaretteRequest $request, Cigarette $cigarette)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cigarette $cigarette)
    {
        //
    }
}
