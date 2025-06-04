<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReviewController;


Route::prefix('livros')->group(function () {
    Route::get('/', [LivroController::class, 'listar']);
    Route::post('/', [LivroController::class, 'criar']);
    Route::get('{id}', [LivroController::class, 'buscar']);
    Route::put('{id}', [LivroController::class, 'atualizar']);
    Route::delete('{id}', [LivroController::class, 'deletar']);

    Route::get('{id}/reviews', [LivroController::class, 'reviews']);
    Route::get('detalhes/todos', [LivroController::class, 'detalhes']);
});


Route::prefix('autores')->group(function () {
    Route::get('/', [AutorController::class, 'listar']);
    Route::post('/', [AutorController::class, 'criar']);
    Route::get('{id}', [AutorController::class, 'buscar']);
    Route::put('{id}', [AutorController::class, 'atualizar']);
    Route::delete('{id}', [AutorController::class, 'deletar']);
    Route::get('{id}/livros', [AutorController::class, 'livros']);
    Route::get('com-livros/todos', [AutorController::class, 'pertence']);
});


Route::prefix('generos')->group(function () {
    Route::get('/', [GeneroController::class, 'listar']);
    Route::post('/', [GeneroController::class, 'criar']);
    Route::get('{id}', [GeneroController::class, 'buscar']);
    Route::put('{id}', [GeneroController::class, 'atualizar']);
    Route::delete('{id}', [GeneroController::class, 'deletar']);
    Route::get('{id}/livros', [GeneroController::class, 'livros']);
    Route::get('com-livros/todos', [GeneroController::class, 'pertencegen']);
});

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'listar']);
    Route::post('/', [UsuarioController::class, 'criar']);
    Route::get('{id}', [UsuarioController::class, 'buscar']);
    Route::put('{id}', [UsuarioController::class, 'atualizar']);
    Route::delete('{id}', [UsuarioController::class, 'deletar']);
    Route::get('{id}/reviews', [UsuarioController::class, 'reviews']);
});

Route::prefix('reviews')->group(function () {
    Route::get('/', [ReviewController::class, 'listar']);
    Route::post('/', [ReviewController::class, 'criar']);
    Route::get('{id}', [ReviewController::class, 'buscar']);
    Route::put('{id}', [ReviewController::class, 'atualizar']);
    Route::delete('{id}', [ReviewController::class, 'deletar']);
});
