<?php

namespace App\Http\Controllers;

use App\Models\Vacinacao;
use Illuminate\Http\Request;

class VacinacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $controleV = Vacinacao::all();
        return view("ControleV.index", compact("controleV"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('controleV.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Vacinacao::create($request->all());
        return redirect()->route("ControleV.index");
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
        $controleV = Vacinacao::findOrFail($id);
        return view('ControleV.edit', compact('controleV'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $controleV = Vacinacao::findOrFail($id);
        $controleV->update($request->all());
        return redirect()->route("ControleV.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $controleV = Vacinacao::findOrFail($id);
        $controleV->delete();
        return redirect()->back();
    }
}
