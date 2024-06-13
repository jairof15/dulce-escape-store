<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Http\Requests\StoreVentaRequest;
use App\Http\Requests\UpdateVentaRequest;

class VentaController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        view('ventas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVentaRequest $request)
    {
        //
        return redirect()->route('ventas.index')->with('success', 'venta created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        //
        return view('', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venta $venta)
    {
        //
        return view('ventas.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVentaRequest $request, Venta $venta)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        //
    }
}
