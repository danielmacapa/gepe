<?php

use App\Http\Controllers\Manager\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\CharacterController;
use App\Http\Controllers\Manager\CampaignController;

// Route::prefix('/manager')->name('manager.')->middleware(['auth', 'can:admin'])->group(function () {
//     Route::get('/', [ProfileController::class, 'panel_admin'])->name('panel_admin');
// });


Route::prefix('/manager')->name('manager.')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Rotas do projeto

    Route::controller(CharacterController::class)
    ->prefix('/character')->name('character.')
    ->group(function(){
        Route::get('/list', 'list' )->name('list');
        Route::get('/show/{uuid}', 'show' )->name('show');

        Route::get('create', 'create' )->name('create');
        Route::post('store', 'store' )->name('store');

        Route::get('update/{uuid}', 'update' )->name('update');
        Route::put('put', 'put' )->name('put');

        Route::get('delete/{uuid}', 'delete' )->name('delete');
        Route::put('destroy', 'destroy' )->name('destroy');

    });

    Route::controller(CampaignController::class)
    ->prefix('/campaign')->name('campaign.')
    ->group(function(){
        Route::get('/list', 'list' )->name('list');
        Route::get('/show/{uuid}', 'show' )->name('show');

        Route::get('create', 'create' )->name('create');
        Route::post('store', 'store' )->name('store');

        Route::get('update/{uuid}', 'update' )->name('update');
        Route::put('put', 'put' )->name('put');

        Route::get('delete/{uuid}', 'delete' )->name('delete');
        Route::put('destroy', 'destroy' )->name('destroy');

    });

});
