<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * Genres
 */
Route::resource('genres', GenreController::class);

/**
 * Books
 */
Route::resource('books', BookController::class);

/**
 * Para mostrar todos os livros de um gênero específico:
 */
Route::get('/genres/{genre}/books', [GenreController::class, 'books']);
