<?php

namespace App\Http\Controllers;

use App\Models\Pastel;
use Illuminate\Http\Request;

class PastelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasteles = Pastel::get();
        return view('pasteles.index', compact('pasteles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasteles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pastel = new Pastel();
        $pastel->nombre = $request->get('nombre');
        $pastel->sabor = $request->get('sabor');
        $pastel->imagen = $request->get('imagen');
        $pastel->save();
        return redirect()->route('pasteles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pastel = Pastel::findOrFail($id);
        return view('pasteles.show', compact('pastel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pastel = Pastel::findOrFail($id);
        return view('pasteles.edit', compact('pastel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pastel = Pastel::findOrFail($id);
        $pastel->nombre = $request->get('nombre');
        $pastel->sabor = $request->get('sabor');
        $pastel->imagen = $request->get('imagen');
        $pastel->save();
        return redirect()->route('pasteles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pastel = Pastel::findOrFail($id);
        $pastel->delete();
        return redirect()->route('pasteles.index');
    }
}
