<?php

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

Route::get('/', \App\Http\Controllers\HomePageController::class)
    ->name('home');
Route::get('/type-one/{slug}', \App\Http\Controllers\LandingOneTypeController::class)
    ->name('landing1');
Route::get('/type-two/{slug}', \App\Http\Controllers\LandingTwoTypeController::class)
    ->name('landing2');
Route::get('/type-three/{slug}', \App\Http\Controllers\LandingThreeTypeController::class)
    ->name('landing3');
Route::middleware(['auth'])->get('/landings/{id}/download', \App\Http\Controllers\DownloadController::class)
    ->name('download');

require __DIR__.'/auth.php';

