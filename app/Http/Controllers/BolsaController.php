<?php

namespace App\Http\Controllers;

use App\Models\BolsaFamilia;
use Illuminate\Http\Request;

class BolsaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BolsaF = BolsaFamilia::all();
        return view("BolsaF.index", compact("BolsaF"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BolsaF.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        BolsaFamilia::create($request->all());
        return redirect()->route("BolsaF.index");
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
        $bolsaF = BolsaFamilia::findOrFail($id);
        return view('BolsaF.edit', compact('bolsaF'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bolsaF = BolsaFamilia::findOrFail($id);
        $bolsaF->update($request->all());

        return redirect()->route('BolsaF.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bolsaF = BolsaFamilia::findOrFail($id);
        $bolsaF->delete();
        return redirect()->back();
    }
}
