<?php

use Illuminate\Support\Facades\Route;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ContactoController;
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

Route::view('/', 'index')->name('home');

Route::get('/presupuesto', [PresupuestoController::class, 'index'])->name('presupuesto.index');

Route::get('/private/dashboard', function () {
    return view('private/dashboard');
});

Route::get('/contacto', [ContactoController::class, 'index'])->name('contacto.index');
Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.post');
