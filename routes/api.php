<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\MarcaController;
use App\Http\Controllers\API\ProductoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Rutas públicas (sin autenticación)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas (requieren autenticación)
Route::middleware('auth:sanctum')->group(function () {
    
    // Autenticación
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // CRUD Marcas
    Route::apiResource('marcas', MarcaController::class);
    
    // CRUD Productos  
    Route::apiResource('productos', ProductoController::class);
});

// Ruta para verificar que la API funciona
Route::get('/test', function () {
    return response()->json([
        'success' => true,
        'message' => 'API Wonka funcionando correctamente',
        'timestamp' => now()
    ]);
});