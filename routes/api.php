<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Wrap API resource registration outside of the closure for '/user'.
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Register 'painel-digital' as an API Resource.
Route::apiResource('painel-digital', 'PainelDigitalController');
