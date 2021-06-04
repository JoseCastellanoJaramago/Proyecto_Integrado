<?php

use App\Http\Controllers\ClaseController;
use App\Http\Controllers\EjerciciosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
use Illuminate\Support\Facades\Auth;
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

//--- Vista principal
Route::get('/', function () {
    return view('welcome');
});


//--- Autenticación
Auth::routes();


//--- Vistas antes de login
Route::get('/actividades', [UserController::class, 'actividades'])
    ->name('actividades');

Route::get('/contacto', [UserController::class, 'contacto'])
    ->name('contacto');

Route::get('/normasCovid', [UserController::class, 'normasCovid'])
    ->name('normasCovid');

Route::get('/precios', [UserController::class, 'precios'])
    ->name('precios');

Route::get('/usuarios/perfil', [UserController::class, 'showPerfil'])
    ->name('users.perfil');


//--- Vistas usuarios
Route::get('/usuarios', [UserController::class, 'index'])
    ->name('users.index');

Route::get('/usuarios/{user}', [UserController::class, 'show'])
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/nuevo', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])
    ->name('users.edit');

Route::put('usuarios/{user}', [UserController::class, 'update']);

Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])
    ->name('users.destroy');

Route::get('/usuarios/perfil/tabla', [UserController::class, 'showTablaEj'])
    ->name('users.tablaEj');


//--- Vistas admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [UserController::class, 'admin'])
    ->name('admin.home');


//--- Vistas entrenadores
Route::get('/usuarios/entrenadores', [TrainerController::class, 'trainer'])
    ->where('user', '[0-9]+')
    ->name('trainer.index');

Route::delete('/entrenadores/{user}', [TrainerController::class, 'destroyEntrenador'])
    ->name('trainer.destroy');

Route::get('/entrenadores/{user}/editar', [TrainerController::class, 'editEntrenador'])
    ->name('trainer.edit');

Route::get('/entrenadores/{user}', [TrainerController::class, 'showEntrenador'])
    ->where('user', '[0-9]+')
    ->name('trainer.show');

Route::get('/entrenadores/trainings', [TrainerController::class, 'showTrainings'])
    ->name('trainer.trainings');

Route::get('/alumnos', [TrainerController::class, 'showAlumnos'])
    ->name('trainer.alumnos');

Route::put('/alumnos/asignar', [TrainerController::class, 'asignarAlumnos'])
    ->name('trainer.asignar');


//--- Vistas clases
Route::get('/usuarios/horarios', [ClaseController::class, 'horariosClases'])
    ->name('clases.horario');

Route::get('/usuarios/clases', [ClaseController::class, 'clases'])
    ->where('user', '[0-9]+')
    ->name('clases.index');

Route::get('/usuarios/clases/fitness', [ClaseController::class, 'showFitness'])
    ->name('clases.Fitness');

Route::get('/usuarios/clases/agua', [ClaseController::class, 'showAgua'])
    ->name('clases.Agua');

Route::get('/usuarios/clases/aerobic', [ClaseController::class, 'showAerobic'])
    ->name('clases.Aerobic');

Route::get('/usuarios/clases/bodycombat', [ClaseController::class, 'showBodycombat'])
    ->name('clases.Body Combat');

Route::get('/usuarios/clases/pilates', [ClaseController::class, 'showPilates'])
    ->name('clases.Pilates');

Route::get('/usuarios/clases/zumba', [ClaseController::class, 'showZumba'])
    ->name('clases.Zumba');

Route::get('/usuarios/clases/padel', [ClaseController::class, 'showPadel'])
    ->name('clases.Pádel');

Route::get('/usuarios/clases/fisioterapia', [ClaseController::class, 'showFisioterapia'])
    ->name('clases.Fisioterapia');

Route::put('/clases/asignar', [ClaseController::class, 'asignarClases'])
    ->name('clases.asignar');

Route::put('/clases/anular', [ClaseController::class, 'anularReserva'])
    ->name('clases.anular');

Route::get('/clases/anularVista', [ClaseController::class, 'anular'])
    ->name('clases.anularVista');


//--- Vistas ejercicios
Route::get('/ejercicios', [EjerciciosController::class, 'indexEjercicios'])
    ->name('ejercicios.index');

Route::get('/ejercicios/{ejercicio}', [EjerciciosController::class, 'showEjercicios'])
    ->name('ejercicios.show');

Route::get('/ejercicios/{ejercicio}/editar', [EjerciciosController::class, 'editEjercicios'])
    ->name('ejercicios.edit');

Route::put('ejercicios/{ejercicio}', [EjerciciosController::class, 'updateEjercicios']);

Route::post('/ejercicios', [EjerciciosController::class, 'storeEjercicios']);

Route::delete('/ejercicios/{ejercicio}', [EjerciciosController::class, 'destroyEjercicios'])
    ->name('ejercicios.destroy');

Route::get('/ejercicios/nuevo', [EjerciciosController::class, 'createEjercicios'])
    ->name('ejercicios.create');


//--- Descarga imagen
Route::get('/usuarios/horarios/descargar', [UserController::class, 'download'])
    ->name('download');








