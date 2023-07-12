<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;

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

Route::post('/v1/auth/login', [LoginController::class, 'login']);

// TODO
// Route::post('/v1/auth/logout', [LoginController::class, 'logout'])->middleware('auth'); 

// Testing Routes
Route::post('test/new_data', [TestController::class, 'test_new_data']);
Route::get('test/all', [TestController::class, 'all']);
Route::get('test/ping', function () {
    return response()->json(['message' => 'ok'], 200);
});