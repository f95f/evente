<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/produtos/{id?}', function ($id = 0) {
Route::get('/produtos', function () {

    $busca = request('');
    return view('produto', ['busca' => $busca]);
});
