<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\PcController;
use App\Http\Controllers\UserController;
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

Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/{id}', [EmployeeController::class, 'show']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::post('/employees/{id}', [EmployeeController::class, 'update']);
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);

Route::get('/equipments', [EquipmentController::class, 'index']);
Route::get('/equipments/{id}', [EquipmentController::class, 'show']);
Route::post('/equipments', [EquipmentController::class, 'store']);
Route::post('/equipments/{id}', [EquipmentController::class, 'update']);
Route::delete('/equipments/{id}', [EquipmentController::class, 'destroy']);

Route::get('/keyboards', [KeyboardController::class, 'index']);
Route::get('/keyboards/{id}', [KeyboardController::class, 'show']);
Route::post('/keyboards', [KeyboardController::class, 'store']);
Route::post('/keyboards/{id}', [KeyboardController::class, 'update']);
Route::delete('/keyboards/{id}', [KeyboardController::class, 'destroy']);

Route::get('/mouses', [MouseController::class, 'index']);
Route::get('/mouses/{id}', [MouseController::class, 'show']);
Route::post('/mouses', [MouseController::class, 'store']);
Route::post('/mouses/{id}', [MouseController::class, 'update']);
Route::delete('/mouses/{id}', [MouseController::class, 'destroy']);

Route::get('/pcs', [PcController::class, 'index']);
Route::get('/pcs/{id}', [PcController::class, 'show']);
Route::post('/pcs', [PcController::class, 'store']);
Route::post('/pcs/{id}', [PcController::class, 'update']);
Route::delete('/pcs/{id}', [PcController::class, 'destroy']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);



