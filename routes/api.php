<?php

use App\Http\Controllers\AppointController;
use App\Http\Controllers\PatientController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/patients',[PatientController::class, 'index']);
Route::post('/patients',[PatientController::class, 'store']);
Route::put('/patients/{id}',[PatientController::class, 'update']);

Route::get('/appoints',[AppointController::class, 'index']);
Route::post('/appoints',[AppointController::class, 'store']);
Route::put('/appoints/{id}',[AppointController::class, 'update']);
Route::get('/appoints/all',[AppointController::class, 'showAll']);