<?php

use App\Http\Controllers\SzavakController;
use App\Http\Controllers\TemaController;
use Illuminate\Support\Facades\Route;

Route::get('/tema', [TemaController::class, 'getTemak']);
Route::get('/szavak', [SzavakController::class, 'getSzavak']);
Route::get('/szavak/tema', [SzavakController::class, 'getSzavakByTema']);