<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::prefix('authors')->group(function () {
    Route::post('/', [AuthorController::class, 'store']);
    Route::get('/', [AuthorController::class, 'index']);
    Route::get('/{author}', [AuthorController::class, 'show']);
    Route::put('/{author}', [AuthorController::class, 'update']);
    Route::delete('/{author}', [AuthorController::class, 'destroy']);
});

Route::prefix('books')->group(function () {
    Route::post('/', [BookController::class, 'store']);
    Route::get('/', [BookController::class, 'index']);
    Route::get('/{book}', [BookController::class, 'show']);
    Route::put('/{book}', [BookController::class, 'update']);
    Route::delete('/{book}', [BookController::class, 'destroy']);
});

