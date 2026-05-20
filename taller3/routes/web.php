<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/', [PaginaController::class, 'inicio']);

Route::get('/inscripcion',
    [PaginaController::class, 'inscripcion']);

Route::post('/guardar-atleta',
    [PqrsController::class, 'guardar'])
        ->name('guardar.atleta');

Route::middleware('auth')->group(function () {

    Route::get('/inscritos',
        [PaginaController::class, 'inscritos']);

    Route::get('/atletas/{id}/edit',
        [PqrsController::class, 'edit'])
            ->name('atletas.edit');

    Route::delete('/atletas/{id}',
        [PqrsController::class, 'destroy'])
            ->name('atletas.destroy');

    Route::put('/actualizar-atleta/{id}',
        [PqrsController::class, 'update'])
            ->name('atletas.update');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile',
        [ProfileController::class, 'edit'])
            ->name('profile.edit');

    Route::patch('/profile',
        [ProfileController::class, 'update'])
            ->name('profile.update');

    Route::delete('/profile',
        [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
});

require __DIR__.'/auth.php';