<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ProductController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('user-profile', [AuthController::class, 'userProfile']);
    Route::post('/products', [ProductController::class,'store']);
});

Route::group([
    'middleware' => 'api',
], function () {
    Route::get('/product', [ProductController::class, 'show']);
    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class,'store']);
});

Route::group([
    'middleware' => 'api',
], function () {
    Route::post('/votes', [VoteController::class,'store']);
    Route::delete('/votes/delete/{id}', [VoteController::class,'destroy']);
    Route::get('/votes', [VoteController::class, 'index']);
});
