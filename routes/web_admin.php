<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfessionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CharacterController;
use App\Http\Controllers\Admin\RaceController;
use App\Http\Controllers\Admin\CampaignController;

Route::prefix('/admin')->name('admin.')->middleware(['auth', 'can:admin'])->group(function () {

    Route::controller(RaceController::class)
    ->prefix('/race')->name('race.')
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

    Route::controller(ProfessionController::class)
    ->prefix('/profession')->name('profession.')
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

    Route::controller(UserController::class)
    ->prefix('/user')->name('user.')
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