<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

Route::get('/', [EventoController::class, 'index']);
Route::get('/evento/criar', [EventoController::class, 'create']);
Route::post('/evento', [EventoController::class, 'store']);

//Route::get('/produtos/{id?}', function ($id = 0) {
Route::get('/produtos', function () {

    $busca = request('');
    return view('produto', ['busca' => $busca]);
});
