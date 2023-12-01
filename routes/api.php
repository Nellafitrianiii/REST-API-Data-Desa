<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\DesaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/desa',[DesaController::class,'getData']);
Route::get('/desa/{id}', [DesaController::class, 'getDetail']);
Route::post('/desa', [DesaController::class, 'addDesa']);
Route::put('/desa/{id}', [DesaController::class, 'updateDesa']);
Route::delete('/desa/{id}', [DesaController::class, 'deleteDesa']);
