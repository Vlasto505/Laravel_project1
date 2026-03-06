<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TestController;

// Sada je početna strana direktno forma za profil
Route::get('/', [ProfileController::class, 'showForm']);

// Ostale rute
Route::post('/profile/result', [ProfileController::class, 'processForm'])->name('profile.process');
Route::get('/', [ProfileController::class, 'showForm']);
Route::get('/profile/edit', [ProfileController::class, 'showForm']); // Dodaj ovo

Route::get('/example/create', [ExampleController::class, 'create']);
Route::post('/example/result-controller', [ExampleController::class, 'store']);

Route::get('/test', [TestController::class, 'testAction']);
