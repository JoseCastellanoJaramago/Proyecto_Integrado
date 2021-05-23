<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
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

Route::get('/usuarios', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/actividades', [UserController::class, 'actividades'])
    ->name('actividades');

Route::get('/usuarios/{user}', [UserController::class, 'show'])
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/logueo', [UserController::class, 'logueo'])
    ->name('logueo');

Route::get('/usuarios/nuevo', [UserController::class, 'create'])
    ->name('users.create');

Route::get('/ejercicios/nuevo', [UserController::class, 'createEjercicios'])
    ->name('ejercicios.create');

Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])
    ->name('users.edit');

Route::put('usuarios/{user}', [UserController::class, 'update']);

Route::get('/saludo/{name}/{nickname?}', [WelcomeUserController::class, 'index']);

Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])
    ->name('users.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [UserController::class, 'admin'])
    ->name('admin.home');

Route::get('/usuarios/entrenadores', [UserController::class, 'trainer'])
    ->where('user', '[0-9]+')
    ->name('trainer.index');

Route::delete('/entrenadores/{user}', [UserController::class, 'destroyEntrenador'])
    ->name('trainer.destroy');

Route::get('/entrenadores/{user}/editar', [UserController::class, 'editEntrenador'])
    ->name('trainer.edit');

Route::get('/entrenadores/{user}', [UserController::class, 'showEntrenador'])
    ->where('user', '[0-9]+')
    ->name('trainer.show');

Route::get('/entrenadores/trainings', [UserController::class, 'showTrainings'])
    ->name('trainer.trainings');

Route::get('/usuarios/clases', [UserController::class, 'clases'])
    ->where('user', '[0-9]+')
    ->name('clases.index');

Route::get('/usuarios/clases/fitness', [UserController::class, 'showFitness'])
    ->name('clases.Fitness');

Route::get('/usuarios/clases/agua', [UserController::class, 'showAgua'])
    ->name('clases.Agua');

Route::get('/usuarios/clases/aerobic', [UserController::class, 'showAerobic'])
    ->name('clases.Aerobic');

Route::get('/usuarios/clases/bodycombat', [UserController::class, 'showBodycombat'])
    ->name('clases.Body Combat');

Route::get('/usuarios/clases/pilates', [UserController::class, 'showPilates'])
    ->name('clases.Pilates');

Route::get('/usuarios/clases/zumba', [UserController::class, 'showZumba'])
    ->name('clases.Zumba');

Route::get('/usuarios/clases/padel', [UserController::class, 'showPadel'])
    ->name('clases.Pádel');

Route::get('/usuarios/clases/fisioterapia', [UserController::class, 'showFisioterapia'])
    ->name('clases.Fisioterapia');

Route::get('/contacto', [UserController::class, 'contacto'])
    ->name('contacto');

Route::get('/usuarios/perfil', [UserController::class, 'showPerfil'])
    ->name('users.perfil');

Route::get('/ejercicios', [UserController::class, 'indexEjercicios'])
    ->name('ejercicios.index');

Route::get('/ejercicios/{ejercicio}', [UserController::class, 'showEjercicios'])
    ->name('ejercicios.show');

Route::get('/ejercicios/{ejercicio}/editar', [UserController::class, 'editEjercicios'])
    ->name('ejercicios.edit');

Route::put('ejercicios/{ejercicio}', [UserController::class, 'updateEjercicios']);

Route::post('/ejercicios', [UserController::class, 'storeEjercicios']);

Route::delete('/ejercicios/{ejercicio}', [UserController::class, 'destroyEjercicios'])
    ->name('ejercicios.destroy');

Route::get('/usuarios/perfil/tabla', [UserController::class, 'showTablaEj'])
    ->name('users.tablaEj');

Route::get('/alumnos', [UserController::class, 'showAlumnos'])
    ->name('trainer.alumnos');

Route::put('/alumnos/asignar', [UserController::class, 'asignarAlumnos'])
    ->name('trainer.asignar');

