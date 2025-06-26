<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/insertar_materiales', [App\Http\Controllers\MaterialController::class,'store']);

Route::post('/actualizar_{id}', [App\Http\Controllers\MaterialController::class, 'update']);
Route::get('/listar_materiales', [App\Http\Controllers\MaterialController::class, 'index']);