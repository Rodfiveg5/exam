<?php

namespace App\Http\Controllers;

use App\Models\tb_tipo_comida;
use Illuminate\Http\Request;

class TbTipoComidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tb_tipo_comidas = tb_tipo_comida::all();
        return view('tipo_comidas.index', compact('tb_tipo_comidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_tipo_comidas = tb_tipo_comida::all();
        return view('tipo_comidas.create', compact('tb_tipo_comidas'));     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_categoria' => 'required|in:Bebidas,Postres,Platillos Fiertes,Entradas,Sopas',
        ]);

        tb_tipo_comida::create($request->all());

        return redirect()->route('tipo_comidas.index')->with('success', 'Tipo de comida creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(tb_tipo_comida $tb_tipo_comidas)
    {
        return view('tipo_comidas.show', compact('tb_tipo_comida'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tb_tipo_comida $tb_tipo_comidas)
    {
        return view ('tipo_comida.edit', compact('tb_tipo_comida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tb_tipo_comida $tb_tipo_comidas)
    {
        $request->validate([
            'nombre_categoria' => 'required|in:Bebidas,Postres,Platillos Fiertes,Entradas,Sopas',
        ]);

        $tb_tipo_comidas->update($request->all());

        return redirect()->route('tipo_comidas.index')->with('success', 'Tipo de comida actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tb_tipo_comida $tb_tipo_comidas)
    {
        $tb_tipo_comidas->delete();

        return redirect()->route('tipo_comidas.index')->with('success', 'Tipo de comida eliminado exitosamente.');
    }
}
