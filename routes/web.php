<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

/* Route::controller(CursoController::class)->group(function() {
    Route::get('/cursos', 'index')->name("cursos.index");
    Route::get('/cursos/create', 'create')->name("cursos.create");
    Route::post('/cursos', 'store')->name('cursos.store');
    Route::get('/cursos/{id}', 'show')->name("cursos.show");
    Route::get('/cursos/{id}/edit', 'edit')->name("cursos.edit");
    Route::put('/cursos/{curso}', 'update')->name("cursos.update");
    Route::delete('/cursos/{curso}', 'destroy')->name('cursos.destroy');
}); */
Route::resource('cursos', CursoController::class)->parameters(['cursos' => 'curso'])->names('cursos');
