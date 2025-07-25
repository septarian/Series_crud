<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EliMoviesController;
use App\Http\Controllers\EriMoviesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registered', [AuthController::class, 'registered'])->name('registered');
Route::post('/access', [AuthController::class, 'access'])->name('access');



    //RUTAS DE ERICK//

 Route::get('/erick', function () {
     return view('erick');
});

//Mostrar
Route::get('/eriMovies', [EriMoviesController::class, 'index'])->name('eriMovies'); #Vista de la tabla
//Crear
Route::post('/eriMovies',[EriMoviesController::class, 'save'])->name('eriMovies.save'); #Funcion guardar registro
//Editar
Route::get('/eriMovies/{id}/edit', [EriMoviesController::class, 'edit'])->name('eriMovies.edit');  #Vista para editar el registro
Route::put('/eriMovies/{id}', [EriMoviesController::class, 'update'])->name('eriMovies.update');   #Funcion para actualizar el registro
//Eliminar
Route::delete('/eriMovies/{id}', [EriMoviesController::class, 'destroy'])->name('eriMovies.destroy');  #Funcion para eliminar el registro

    //RUTAS DE ELIZABETH//

 Route::get('/elizabeth', function () {
     return view('elizabeth');
});

Route::get('/eliMovies', [EliMoviesController::class, 'index'])->name('eliMovies');
Route::post('/eliMovies', [EliMoviesController::class, 'save'])->name('eliMovies.save');

Route::get('/eliMovies/{id}/edit', [EliMoviesController::class, 'edit'])->name('eliMovies.edit');
Route::put('/eliMovies/{id}', [EliMoviesController::class, 'update'])->name('eliMovies.update');

Route::delete('/elimovies/{id}', [EliMoviesController::class, 'destroy'])->name('eliMovies.destroy');