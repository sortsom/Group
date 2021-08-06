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
    return view('auth.login');
});
Route::get('/administrator',[\App\Http\Controllers\HomeController::class,"index"]);
Route::delete('/delete/{user}',[\App\Http\Controllers\HomeController::class,"destroy"])->name('users.delete');
Route::put('/update/{user}',[\App\Http\Controllers\HomeController::class,"update"])->name('users.update');
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
