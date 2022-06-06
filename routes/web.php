<?php

use App\Http\Controllers\AbonneController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});
Route::get('/', [AbonneController::class, 'index']);


Route::resource('abonne', AbonneController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
