<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TrainController;

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

// earlier Laravel versions
//Route::get('/trains', 'TrainController@index');
// in this version
Route::get('/trains', [TrainController::class, 'index']);

Route::get('/trains/create', [TrainController::class, 'create']);

Route::post('/trains', [TrainController::class, 'store']);

Route::get('/trains/{id}', [TrainController::class, 'show']);

Route::delete('/trains/{id}', [TrainController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
