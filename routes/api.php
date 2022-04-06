<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\pcsir_team;
use App\Http\Controllers\PcsirTeamController;
use App\Http\Controllers\PcsirLabController;
use App\Http\Controllers\PcsirNewsController;
use App\Http\Controllers\PcsirSliderController;
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
Route::get('/pcsir_team', [PcsirTeamController::class, 'index1']);
Route::get('/pcsir_lab', [PcsirLabController::class, 'index1']);
Route::get('/pcsir_news', [PcsirNewsController::class, 'index1']);
Route::get('/pcsir_slider', [PcsirSliderController::class, 'index1']);
Route::get('/pcsir_team1', [PcsirTeamController::class, 'show1']);