<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/insertar_materiales', [App\Http\Controllers\MaterialController::class,'store']);
