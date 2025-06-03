<?php

// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

Route::get('/saludos', [PruebaController::class, 'saludarGet']);
Route::post('/saludos', [PruebaController::class, 'saludarPost']);
