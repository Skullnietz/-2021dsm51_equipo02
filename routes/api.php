<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TokenController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\EstudiosMedicosController;


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

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user();
});

/*
Route::middleware('auth:sanctum')->get('/user/posts', function (Request $request) {
    return $request->user()->posts;
});


Route::delete('/auth/token', [TokenController::class, 'destroy']);
*/
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('usuarios', UsersController::class)->except(['create', 'edit']);
    Route::apiResource('estudios_medicos', EstudiosMedicosController::class)->except(['create', 'edit']);

});

Route::post('/auth/token', [TokenController::class, 'store']);

