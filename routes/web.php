<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
     return view('welcome');
});

Route::get('/movies', [MoviesController::class, 'index'])->name('movies');

Route::post('/movies',[MoviesController::class, 'save'])->name('movies.save');

Route::get('/movies/{id}/edit', [MoviesController::class, 'edit'])->name('movies.edit');
Route::put('movies/{id}', [MoviesController::class, 'update'])->name('movies.update');

Route::delete('/movies/{id}', [MoviesController::class, 'destroy'])->name('movies.destroy');