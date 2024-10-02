<?php

namespace App\Http\Controllers;

use App\Models\Cigarette;
use App\Http\Requests\StoreCigaretteRequest;
use App\Http\Requests\UpdateCigaretteRequest;
use Illuminate\Support\Facades\Storage;

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
        // Validate
        $cigarette = $request->validate([
            'name' => ['required', 'max:50'],
            'type' => ['required', 'max:50', 'in:elfbar,pod'],
            'strength'=> ['required', 'max:50'],
            'puffs'=> ['required', 'max:50000', 'numeric'],
            'flavor'=> ['required'],
            'price'=> ['required', 'numeric'],
            'image'=> ['required', 'image', 'nullable'],
        ]);

        // Store an image if exist
        $path = null;
        if ($request->hasFile('image')){
            $path = Storage::disk('public')->put( 'images/'.$request->type,$request->image);
        }

        // Create product
        Cigarette::create([
            'name' => $request->name,
            'type' =>$request->type,
            'strength'=>$request->strength,
            'puffs'=>$request->puffs,
            'flavor'=>$request->flavor,
            'price'=>$request->price,
            'image'=> $path
        ]);

        // Redirect
        return redirect()->route('admin_panel')->with('success', 'New cigarette was successfully created');
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
