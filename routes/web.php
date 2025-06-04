<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

// Rutas API para saludar
Route::get('/api/saludo', [PruebaController::class, 'saludarGet']);
Route::post('/api/saludo', [PruebaController::class, 'saludarPost']);

// Ruta de health check
Route::get('/api/health', function () {
    return response()->json(['status' => 'ok'], 200);
});