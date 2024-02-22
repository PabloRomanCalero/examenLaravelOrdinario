<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        return response()->json($pasteles, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pastel = new Pastel();
        $pastel->nombre = $request->nombre;
        $pastel->sabor = $request->sabor;
        $pastel->imagen = $request->imagen;
        $pastel->save();
        return response()->json($pastel, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pastel $pastele)
    {
        return response()->json($pastele, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pastel $pastele)
    {
        $pastele->nombre = $request->nombre;
        $pastele->sabor = $request->sabor;
        $pastele->imagen = $request->imagen;
        $pastele->save();
        return response()->json($pastele, 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pastel $pastele)
    {
        $pastele->delete();
        return response()->json(null, 204);
    }
}
