<?php

use App\Http\Controllers\gestanteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacinacaoController;
use App\Http\Controllers\medicamentosController;
use App\Http\Controllers\VisitasController;
use App\Http\Controllers\BolsaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/gestante', [gestanteController::class, 'index'])->name('gestante.index');

Route::get('/gestante/create', [gestanteController::class, 'create'])->name('gestante.create');

Route::post('/gestante', [gestanteController::class, 'store'])->name('gestante.store');

Route::get('/gestante/{id}/edit', [gestanteController::class, 'edit'])->name('gestante.edit');

Route::put('/gestante/{id}', [gestanteController::class, 'update'])->name('gestante.update');

Route::delete('/gestante/{id}', [gestanteController::class, 'destroy'])->name('gestante.destroy');



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


require __DIR__.'/auth.php';
