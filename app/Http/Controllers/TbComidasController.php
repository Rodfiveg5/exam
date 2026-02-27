<?php

namespace App\Http\Controllers;
use App\Models\tb_tipo_comida;
use App\Models\tb_comidas;
use Illuminate\Http\Request;

class TbComidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tb_comidas = tb_comidas::all();
        return view('comidas.index', compact('tb_comidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tb_tipo_comidas = tb_tipo_comida::all();
        return view('comidas.create', compact('tb_tipo_comidas'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_comida' => 'required|string|max:255',
            'costo_comida' => 'required|numeric',
            'descripcion_comida' => 'nullable|string',
            'id_tb_tipo_comidas' => 'required|exists:tb_tipo_comidas,id',
        ]);

        tb_comidas::create($request->all());

        return redirect()->route('comidas.index')->with('success', 'Comida creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(tb_comidas $tb_comidas)
    {
        return view ('comidas.show', compact('tb_comidas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tb_comidas $comida)
    {
        $tb_tipo_comidas = tb_tipo_comida::all();
        return view('comidas.edit', compact('comida', 'tb_tipo_comidas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tb_comidas $comida)
    {
        $comida->update($request->all());
        return redirect()->route('comidas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tb_comidas $comida)
    {
       $comida->delete();
       return redirect()->route('comidas.index');
    }
}
