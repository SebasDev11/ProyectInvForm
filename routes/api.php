<?php

use App\Http\Controllers\ClienteRestController;
use App\Http\Controllers\RegionRestController;
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
/* Cliente */
Route::get('/clientes', [ClienteRestController::class, 'index']);
Route::post('/clientes', [ClienteRestController::class, 'store']);
Route::put('/clientes/{cliente}', [ClienteRestController::class, 'update']);
Route::delete('/clientes/{cliente}', [ClienteRestController::class, 'destroy']);

/*Region*/
Route::get('/regions', [RegionRestController::class, 'index']);
Route::post('/regions', [RegionRestController::class, 'store']);
Route::put('/regions/{region}', [RegionRestController::class, 'update']);
Route::delete('/regions/{region}', [RegionRestController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
