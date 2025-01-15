<?php

use App\Http\Controllers\Controller;
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


Route::prefix('/')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('inicio', [Controller::class, 'home'])->name('home');
    Route::get('sobre-mi', [Controller::class, 'sobremi'])->name('sobremi');
    Route::get('proyectos', [Controller::class, 'proyectos'])->name('proyectos');
    Route::get('habilidades', [Controller::class, 'habilidades'])->name('habilidades');
    Route::get('contacto', [Controller::class, 'contacto'])->name('contacto');
    Route::post('/enviar-contacto', [Controller::class, 'enviarCorreo'])->name('enviar.contacto');

});



