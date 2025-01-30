<?php

use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('publisher', App\Http\Controllers\PublisherController::class)->middleware('auth');
Route::get('/publisher', [PublisherController::class, 'index'])->name('publisher.index');
Route::get('/publisher/create', [PublisherController::class, 'create'])->name('publisher.create');
Route::post('/publisher', [PublisherController::class, 'store'])->name('publisher.store');
Route::delete('/publisher/{publisher}', [PublisherController::class, 'destroy'])->name('publisher.destroy');
