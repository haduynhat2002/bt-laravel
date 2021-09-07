<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/index', [EventController::class, 'index']);
Route::get('/user/create', [EventController::class, 'create']);
Route::post('/user/create', [EventController::class, 'store']);
Route::delete('/user/destroy/{id}', [EventController::class, 'destroy']);
Route::put('/user/update/{id}', [EventController::class, 'update']);
Route::get('/user/edit/{id}', [EventController::class, 'edit']);
