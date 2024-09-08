<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\ProjectController;

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
// route prfix v1
Route::prefix('v1')->group(function () {
    // projects routes
    Route::apiResource('/projects',ProjectController::class);

    // tasks routes
    Route::apiResource('/tasks',TaskController::class);
});




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
