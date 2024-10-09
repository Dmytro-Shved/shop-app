<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cigarette;
use App\Http\Requests\StoreCigaretteRequest;
use App\Http\Requests\UpdateCigaretteRequest;
use Illuminate\Auth\Access\Gate;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Storage;

class AdminCigaretteController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            'auth'
        ];
    }

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
        $request->validate([
            'name' => ['required', 'max:50'],
            'type' => ['required', 'max:50', 'in:elfbar,pod'],
            'strength'=> ['required', 'max:50'],
            'puffs'=> ['required', 'max:50000', 'numeric'],
            'flavor'=> ['required', 'max:191'],
            'price'=> ['required', 'numeric'],
            'image'=> ['required', 'image', 'nullable'],
        ]);

        // Store an image
        $path = Storage::disk('public')->put( 'images/'.$request->type,$request->image);

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
        return view('product/cigarette-show', ['cigarette' => $cigarette]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cigarette $cigarette, Admin $admin)
    {
        return view('product/cigarette-edit', ['cigarette' => $cigarette]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCigaretteRequest $request, Cigarette $cigarette)
    {
        // Validate
        $request->validate([
            'name' => ['required', 'max:50'],
            'type' => ['required', 'max:50', 'in:elfbar,pod'],
            'strength'=> ['required', 'max:50'],
            'puffs'=> ['required', 'max:50000', 'numeric'],
            'flavor'=> ['required', 'max:191'],
            'price'=> ['required', 'numeric'],
            'image'=> ['image', 'nullable'],
        ]);

        // Old image path
        $path = $cigarette->image;

        // If we have new image, delete old image and save the new one
        if ($request->hasFile('image')){
            if ($cigarette->image){
                Storage::disk('public')->delete($cigarette->image);
            }
            $path = Storage::disk('public')->put( 'images/'.$request->type,$request->image);
        }

        // Update product
        $cigarette->update([
            'name' => $request->name,
            'type' =>$request->type,
            'strength'=>$request->strength,
            'puffs'=>$request->puffs,
            'flavor'=>$request->flavor,
            'price'=>$request->price,
            'image'=> $path
        ]);

        // Redirect to admin panel
        return redirect()->route('admin_panel')->with('edit', 'Cigarette was edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cigarette $cigarette)
    {
        // Delete product image if exists
        if ($cigarette->image){
            Storage::disk('public')->delete($cigarette->image);
        }

        // Delete a product fields
        $cigarette->delete();

        // Redirect
        return back()->with('delete', 'Cigarette '.$cigarette->name.' was deleted successfully!');
    }
}
