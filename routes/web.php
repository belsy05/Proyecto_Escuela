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

Route::get('/', function () {
    return view('welcome');
});

/* ********************************************** Alumno *********************************/
//ruta para leer
Route::get('/alumnos', [AlumnoController::class, 'index'])
->name('alumno.index');

//ruta para barra de busqueda
Route::get('/alumnos/buscar', [AlumnoController::class, 'index2'])
->name('alumno.index2');

//ruta para mostrar
Route::get('/alumnos/{id}', [AlumnoController::class, 'show'])
->name('alumno.mostrar')->where('id', '[0-9]+');

//ruta para crear
Route::get('/alumnos/crear', [AlumnoController::class, 'crear'])
->name('alumno.crear');

//ruta para postear
Route::post('/alumnos/crear', [AlumnoController::class, 'store'])
->name('alumno.guardar');

//ruta para mostrar formulario
Route::get('/alumnos/{id}/editar', [AlumnoController::class, 'edit'])
->name('alumno.edit')->where('id', '[0-9]+');

//para actualizar los datos
Route::put('/alumnos/{id}/editar', [AlumnoController::class, 'update'])
->name('alumno.update')->where('id', '[0-9]+');

//ruta para borrar datos
Route::delete('/alumnos/{id}/borrar', [AlumnoController::class, 'destroy'])
->name('alumno.borrar')->where('id', '[0-9]+');