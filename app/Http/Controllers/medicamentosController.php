<?php

namespace App\Http\Controllers;

use App\Models\medicamentos;
use Illuminate\Http\Request;

class medicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentoP = medicamentos::all();
        return view("medicamentos.index", compact("medicamentoP"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        medicamentos::create($request->all());
        return redirect()->route("medicamentos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicamentoP = medicamentos::findOrFail($id);
        return view('medicamentos.edit', compact('medicamentoP'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medicamentoP = medicamentos::findOrFail($id);
        $medicamentoP->update($request->all());

        return redirect()->route('medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medicamentoP = medicamentos::findOrFail($id);
        $medicamentoP->delete();

        return redirect()->back();
    }
}
