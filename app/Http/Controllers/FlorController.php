<?php

namespace App\Http\Controllers;

use App\Models\Flor;
use Illuminate\Http\Request;

class FlorController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Flor::all(),200);
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
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required|string',
            'color'=>'required|string',
            'precio_tallo'=>'required|string'
        ]);
        $nuevaFlor=Flor::create($request->all());
        return response()->json($nuevaFlor,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flor = Flor::find($id);
        if(!$flor){
            return response()->json(['message','no se ha encontrado ninguna flor'],404);
        }
        return response()->json($flor,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
