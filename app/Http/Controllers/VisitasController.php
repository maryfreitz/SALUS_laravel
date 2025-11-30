<?php

namespace App\Http\Controllers;

use App\Models\Visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $VisitaD = Visitas::all();
        return view("Visita.index", compact("VisitaD"));
    }



    public function create()
    {
        return view('Visita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome'          => 'required|string|max:255',
        'motivo_visita' => 'required|string|max:255',
        'data'          => 'required|date_format:Y-m-d|before_or_equal:today',
        'agente'        => 'required|string|max:255',
    ]);

    Visitas::create([
        'nome'          => $request->nome,
        'motivo_visita' => $request->motivo_visita,
        'data'          => $request->data,
        'agente'        => $request->agente,
    ]);

    return redirect()->route("Visita.index");
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
        $VisitaD = Visitas::findOrFail($id);
        return view('Visita.edit', compact('VisitaD'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $request->validate([
        'nome'          => 'required|string|max:255',
        'motivo_visita' => 'required|string|max:255',
        'data'          => 'required|date_format:Y-m-d|before_or_equal:today',
        'agente'        => 'required|string|max:255',
    ]);

    $VisitaD = Visitas::findOrFail($id);

    $VisitaD->update([
        'nome'          => $request->nome,
        'motivo_visita' => $request->motivo_visita,
        'data'          => $request->data,
        'agente'        => $request->agente,
    ]);

    return redirect()->route('Visita.index');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $VisitaD = Visitas::findOrFail($id);
        $VisitaD->delete();
        return redirect()->back();
    }
}
