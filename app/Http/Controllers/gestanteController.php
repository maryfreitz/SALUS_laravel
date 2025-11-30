<?php

namespace App\Http\Controllers;

use App\Models\gestante;
use Illuminate\Http\Request;

class gestanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gestanteC = gestante::all();
        return view("gestante.index", compact("gestanteC"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gestante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome_gestante' => 'required|string|max:255',
            'idade_gestacao' => 'required|integer|min:1|max:45',
            'data_prevista_parto' => 'required|date',
            'responsavel_acompanhamento' => 'required|string|max:255',
        ]);

        gestante::create($validated);

        return redirect()->route("gestante.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gestanteC = gestante::findOrFail($id);
        return view('gestante.edit', compact('gestanteC'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nome_gestante' => 'required|string|max:255',
            'idade_gestacao' => 'required|integer|min:1|max:45',
            'data_prevista_parto' => 'required|date',
            'responsavel_acompanhamento' => 'required|string|max:255',
        ]);

        $gestanteC = gestante::findOrFail($id);
        $gestanteC->update($validated);

        return redirect()->route("gestante.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gestanteC = gestante::findOrFail($id);
        $gestanteC->delete();
        return redirect()->back();
    }
}
