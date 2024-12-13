<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [ProjectController::class, 'index']);  // Página de proyectos
});

