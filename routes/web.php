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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home/{option?}', [App\Http\Controllers\HomeController::class, 'index'])->name('option');
Route::get('/borrower', [App\Http\Controllers\HomeController::class, 'borrower'])->name('borrower');
