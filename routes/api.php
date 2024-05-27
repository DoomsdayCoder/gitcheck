<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UserManager;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout',[UserManager::class,'logout']);
});

Route::post('/register',[UserManager::class,'register']);
Route::post('/authenticate',[UserManager::class,'signin']);

