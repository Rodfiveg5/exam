<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TbComidasController;
use App\Http\Controllers\TbTipoComidaController;

Route::resource('comidas', TbComidasController::class);
Route::resource('tipocomidas', TbTipoComidaController::class);

Route::get('/', function () {
    return redirect()->route('comidas.index');
});

Route::get('/crear', function () {
    return redirect()->route('comidas.create');
});

Route::get('/editar', function () {
    return redirect()->route('comidas.edit');
});






