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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/art-collections', [App\Http\Controllers\HomeController::class, 'collections'])->name('collections');
Route::get('/art/{slung}', [App\Http\Controllers\HomeController::class, 'art'])->name('art');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
