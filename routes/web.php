<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\Manager\ProfileController;
use Illuminate\Support\Facades\Route;

// Rotas de Auth sem verificação de e-mail
Route::get('/', [ProfileController::class, 'show']);

Route::post('/calcular-soma', [FormController::class, 'calcularSoma'])->name('calcular-soma');





require __DIR__.'/web_admin.php';
require __DIR__.'/web_manager.php';
require __DIR__.'/auth.php';

