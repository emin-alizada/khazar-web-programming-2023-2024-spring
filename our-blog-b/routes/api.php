<?php

use App\Http\Controllers\BlogApiController;
use App\Http\Controllers\BlogFullController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.')->group(function () {
//    Explicit routing of api resource

//    Route::get('/blogs', [BlogApiController::class, 'index'])->name('blogs.index');
//    Route::get('/blogs/{id}', [BlogApiController::class, 'show'])->name('blogs.show');
//    Route::post('/blogs', [BlogApiController::class, 'store'])->name('blogs.store');
//    Route::put('/blogs/{id}', [BlogApiController::class, 'update'])->name('blogs.update');
//    Route::delete('/blogs/{id}', [BlogApiController::class, 'destroy'])->name('blogs.destroy');

//    Implicit routing of api resource
    Route::apiResource('blogs', BlogApiController::class);
    Route::apiResource('blogs-v2', BlogFullController::class);
});

