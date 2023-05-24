<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CampaignUserController;

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

// Rotas de Auth sem verificação de e-mail
Route::get('/', [ProfileController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// Rotas do projeto
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
//Route::resource('player', PlayerController::class);
Route::controller(PlayerController::class)
->prefix('/player')->name('player.')
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

Route::controller(CampaignUserController::class)
->prefix('/campaign_user')->name('campaign_user.')
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

require __DIR__.'/auth.php';