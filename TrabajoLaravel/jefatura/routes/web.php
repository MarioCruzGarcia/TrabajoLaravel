<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\AsignaturaController;




Route::resource('alumnos', AlumnoController::class);
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::get('/alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::put('/alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::resource('profesores', ProfesorController::class);
Route::get('/profesores/create', [ProfesorController::class, 'create'])->name('profesores.create');
Route::get('/profesores/{profesore}/edit', [ProfesorController::class, 'edit'])->name('profesores.edit');
Route::put('/profesores/{profesore}', [ProfesorController::class, 'update'])->name('profesores.update');
Route::delete('/profesores/{profesore}', [ProfesorController::class, 'destroy'])->name('profesores.destroy');
Route::post('/profesores', [ProfesorController::class, 'store'])->name('profesores.store');

Route::resource('grupos', GrupoController::class);
Route::get('/grupos/create', [GrupoController::class, 'create'])->name('grupos.create');
Route::get('/grupos/{grupo}/edit', [GrupoController::class, 'edit'])->name('grupos.edit');
Route::put('/grupos/{grupo}', [GrupoController::class, 'update'])->name('grupos.update');
Route::delete('/grupos/{grupo}', [GrupoController::class, 'destroy'])->name('grupos.destroy');
Route::post('/grupos', [GrupoController::class, 'store'])->name('grupos.store');

Route::resource('asignaturas', AsignaturaController::class);
Route::get('/asignaturas/create', [AsignaturaController::class, 'create'])->name('asignaturas.create');
Route::get('/asignaturas/{asignatura}/edit', [AsignaturaController::class, 'edit'])->name('asignaturas.edit');
Route::put('/asignaturas/{asignatura}', [AsignaturaController::class, 'update'])->name('asignaturas.update');
Route::delete('/asignaturas/{asignatura}', [AsignaturaController::class, 'destroy'])->name('asignaturas.destroy');
Route::post('/asignaturas', [AsignaturaController::class, 'store'])->name('asignaturas.store');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
