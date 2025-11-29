<?php

use App\Http\Controllers\BolsaController;
use App\Http\Controllers\medicamentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VisitasController;
use App\Http\Controllers\VacinacaoController;


Route::get('/', function () {
    return view('login');
});

Route::get('/telaInicial', function () {
    return view('telaInicial');
})->name('telaInicial');



Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');


Route::get('/vacinacao', [VacinacaoController::class, 'index'])->name('ControleV.index');

Route::get('/vacinacao/create', [VacinacaoController::class, 'create'])->name('ControleV.create');

Route::post('/vacinacao', [VacinacaoController::class, 'store'])->name('ControleV.store');

Route::get('/vacinacao/{id}/edit', [VacinacaoController::class, 'edit'])->name('ControleV.edit');

Route::put('/vacinacao/{id}', [VacinacaoController::class, 'update'])->name('ControleV.update');

Route::delete('/vacinacao/{id}', [VacinacaoController::class, 'destroy'])->name('ControleV.destroy');



Route::get('/medicamentos', [medicamentosController::class, 'index'])->name('medicamentos.index');

Route::get('/medicamentos/create', [medicamentosController::class, 'create'])->name('medicamentos.create');
Route::post('/medicamentos', [medicamentosController::class, 'store'])->name('medicamentos.store');

Route::get('/medicamentos/{id}/edit', [medicamentosController::class, 'edit'])->name('medicamentos.edit');
Route::put('/medicamentos/{id}', [medicamentosController::class, 'update'])->name('medicamentos.update');

Route::delete('/medicamentos/{id}', [medicamentosController::class, 'destroy'])->name('medicamentos.destroy');


Route::get('/Visita', [VisitasController::class, 'index'])->name('Visita.index');

Route::get('/Visita/create', [VisitasController::class, 'create'])->name('Visita.create');
Route::post('/Visita', [VisitasController::class, 'store'])->name('Visita.store');

Route::get('/Visita/{id}/edit', [VisitasController::class, 'edit'])->name('Visita.edit');
Route::put('/Visita/{id}', [VisitasController::class, 'update'])->name('Visita.update');

Route::delete('/Visita/{id}', [VisitasController::class, 'destroy'])->name('Visita.destroy');



Route::get("/Bolsa", [BolsaController::class, "index"])->name("BolsaF.index");

Route::get("/Bolsa/create", [BolsaController::class, "create"])->name("BolsaF.create");
Route::post("/Bolsa" , [BolsaController::class,"store"])->name("BolsaF.store");

Route::get("/Bolsa/{Bolsa}/edit" , [BolsaController::class,"edit"])->name("BolsaF.edit");
Route::put("/Bolsa/{Bolsa}" , [BolsaController::class,"update"])->name("BolsaF.update");

Route::delete("/Bolsa/{Bolsa}" , [BolsaController::class,"destroy"])->name("BolsaF.destroy");