<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TypeProjectController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//* Creo la rotta index per l'API
Route::apiResource('projects', ProjectController::class)->only('index');

//* Creo la rotta show per l'API
Route::get('projects/{id}', [ProjectController::class, 'show']);

//* Creo la rotta per i progetti raggruppati per tipo
Route::get('type/{slug}/projects', TypeProjectController::class);
