<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PcsirTeamController;
use App\Http\Controllers\PcsirLabController;
use App\Http\Controllers\PcsirNewsController;
use App\Http\Controllers\PcsirSliderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// //**************************start team area routes
Route::get('/team', [PcsirTeamController::class, 'index']);
Route::post('/add_team', [PcsirTeamController::class, 'store'])->name('add_team');
Route::get('/team_list', [PcsirTeamController::class, 'show']);
Route::get('/team_edit/{id}', [PcsirTeamController::class, 'edit']);
Route::post('/team_update/{id}',[PcsirTeamController::class, 'update'])->name('team.update');
Route::get('/team_delete/{id}', [PcsirTeamController::class, 'destroy']);
//****************************end team area routes



//****************************end News area routes


Route::get('/', function () {
    return view('Auth.login');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/list', function () {
    return view('table');
});