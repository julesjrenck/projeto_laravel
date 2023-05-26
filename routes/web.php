<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EnderecosController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
})->middleware(\App\Http\Middleware\Autenticador::class);

Route::resource('/users', UsersController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::resource('/enderecos', EnderecosController::class)->only([
    'create', 'store'
]);