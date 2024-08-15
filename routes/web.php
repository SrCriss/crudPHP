<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibrosController::class, 'listar']);
Route::get('/libros/crear', [LibrosController::class, 'crear']);
Route::get('/libros/{idLibro}/editar', [LibrosController::class, 'editar']);
Route::post('/libros/guardar', [LibrosController::class, 'guardar']);
Route::put('/libros/{idLibro}/actualizar', [LibrosController::class, 'actualizar']);
Route::delete('/libros/{idLibro}/eliminar', [LibrosController::class,'eliminar']);