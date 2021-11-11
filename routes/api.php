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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::middleware('api')->get('/lots', [LotController::class, 'index']);

//Route::resource('lots', LotController::class);

Route::middleware('api')->group(function () {
    Route::resource('lots', LotController::class);
});



//Route::post('lots/{id}/', [LotController::class, 'update']);

/*
Route::middleware('api')->group(function () {
    Route::resource('groups', GroupController::class);
});

/*
Route::resources([
    'lots' => LotController::class,
    'groups' => GroupController::class
]);
*/
