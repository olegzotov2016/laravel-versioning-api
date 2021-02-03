<?php

use App\Http\Controllers\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['as' => 'api.'], function (){
    Route::group(['prefix' => 'v1', 'as' => 'v1.'], function (){
        Route::apiResource('users', Api\V1\UserController::class)->names('users');
    });
    Route::group(['prefix' => 'v2', 'as' => 'v2.'], function (){
        Route::apiResource('users', Api\V2\UserController::class)->names('users');
    });
});

