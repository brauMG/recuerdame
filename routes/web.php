<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LifetimeController;
use App\Http\Controllers\PostMentionsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // admin
    // selection - home
    Route::get('/inicio-admin',[DashboardController::class, 'index']);
    Route::get('/agregar-perfil',[DashboardController::class, 'create']);
    Route::get('/eliminar-perfil/{id}',[DashboardController::class, 'delete_view']);
    Route::post('/crear-perfil',[DashboardController::class, 'store'])->name('CreateProfile');
    Route::post('/eliminar-perfil/{id}',[DashboardController::class, 'delete'])->name('DeleteProfile');
    Route::put('/actualizar-perfil-actual/{id}',[DashboardController::class, 'manage'])->name('ManageProfile');
    // profile information
    Route::get('/informacion',[ProfileController::class, 'index']);
    Route::put('/informacion-actualizar/{id}',[ProfileController::class, 'update'])->name('UpdateInformation');
    // mentions information
    Route::get('/menciones',[PostMentionsController::class, 'index']);
    // lifetime information
    Route::get('/trayectoria',[LifetimeController::class, 'index']);
    Route::get('/trayectoria-nuevo',[LifetimeController::class, 'add'])->name('CreatePost');
});

// profile information
Route::get('/perfil',[ProfileController::class, 'view']);
