<?php

use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('publisher', App\Http\Controllers\PublisherController::class)->middleware('auth');

