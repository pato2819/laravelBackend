<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

// Rutas API para saludar
Route::get('/api/saludo', [PruebaController::class, 'saludarGet']);
Route::post('/api/saludo', [PruebaController::class, 'saludarPost']);