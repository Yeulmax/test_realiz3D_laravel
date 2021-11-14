<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LotController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupTypeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->group(function () {
    Route::resource('groupTypes', GroupTypeController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('groups', GroupController::class);
});

Route::middleware('api')->group(function () {
    Route::resource('lots', LotController::class);
});
