<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventParticipantController;
use App\Models\EventParticipant;
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



Route::get('/eventparticipants', [EventParticipantController::class, 'index']);

Route::post('/eventparticipants', [EventParticipantController::class, 'store']);

Route::put('/eventparticipants/{eventparticipant}', [EventParticipantController::class, 'update']);

Route::delete('/eventparticipants/{eventparticipant}', [EventParticipantController::class, 'destroy']);
