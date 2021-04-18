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

Route::get('/usuarios/{user}', [UserController::class, 'show'])
    ->where('user', '[0-9]+')
    ->name('users.show');

Route::get('/usuarios/entrenadores', [UserController::class, 'trainer'])
    ->where('user', '[0-9]+')
    ->name('users.trainer');

Route::get('/logueo', [UserController::class, 'logueo'])
    ->name('logueo');

Route::get('/usuarios/nuevo', [UserController::class, 'create'])
    ->name('users.create');

Route::post('/usuarios', [UserController::class, 'store']);

Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])
    ->name('users.edit');

Route::put('usuarios/{user}', [UserController::class, 'update']);

Route::get('/saludo/{name}/{nickname?}', [WelcomeUserController::class, 'index']);

Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])
    ->name('users.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
