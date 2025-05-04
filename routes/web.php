<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

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

Route::view('/nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
