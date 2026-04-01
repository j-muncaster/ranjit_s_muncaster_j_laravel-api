<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\ToyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/toys', [ToyController::class, 'index']);
Route::get('/toys/{toy}', [ToyController::class, 'show']);
Route::post('/toys', [ToyController::class, 'store']);
Route::patch('/toys/{toy}', [ToyController::class, 'update']);
Route::delete('/toys/{toy}', [ToyController::class, 'destroy']);