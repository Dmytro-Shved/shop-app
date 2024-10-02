<?php

namespace App\Http\Controllers;

use App\Models\Liquid;
use App\Http\Requests\StoreLiquidRequest;
use App\Http\Requests\UpdateLiquidRequest;
use Illuminate\Support\Facades\Storage;

class AdminLiquidController extends Controller
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
    public function store(StoreLiquidRequest $request)
    {
        // Validate
        $liquid = $request->validate([
            'name' => ['required', 'max:50'],
            'pg_vg_ratio' => ['required', 'max:10'],
            'volume'=> ['required', 'max:25', 'numeric'],
            'flavor'=> ['required'],
            'price'=> ['required', 'numeric'],
            'image'=> ['required', 'image', 'nullable'],
        ]);

        // Store an image if exist
        $path = null;
        if ($request->hasFile('image')){
            $path = Storage::disk('public')->put( 'images/liquid',$request->image);
        }

        // Create product
        Liquid::create([
            'name' => $request->name,
            'pg_vg_ratio' =>$request->pg_vg_ratio,
            'volume'=>$request->volume,
            'flavor'=>$request->flavor,
            'price'=>$request->price,
            'image'=> $path
        ]);

        // Redirect
        return redirect()->route('admin_panel')->with('success', 'New liquid was successfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Liquid $liquid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Liquid $liquid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLiquidRequest $request, Liquid $liquid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Liquid $liquid)
    {
        //
    }
}
