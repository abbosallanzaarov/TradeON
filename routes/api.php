<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\AuthController;
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
// Auth
Route::post('auth/login',[AuthController::class,'login']);
Route::post('auth/register',[AuthController::class,'register']);
Route::post('auth/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
// user Address
Route::apiResources([
    'address'=> AdressController::class
]);



// Categories



// Provider


// Product





