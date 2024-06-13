<?php

namespace App\Http\Controllers;

use App\Models\VentaDetalle;
use App\Http\Requests\StoreVentaDetalleRequest;
use App\Http\Requests\UpdateVentaDetalleRequest;

class VentaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        view('ventadetalles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ventadetalles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVentaDetalleRequest $request)
    {
        //
        return redirect()->route('ventasdetalle.index')->with('success', 'ventadetalle created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(VentaDetalle $ventaDetalle)
    {
        //
        return view('', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VentaDetalle $ventaDetalle)
    {
        //
        return view('ventadetalles.edit', compact('ventadetalle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVentaDetalleRequest $request, VentaDetalle $ventaDetalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VentaDetalle $ventaDetalle)
    {
        //
    }
}
