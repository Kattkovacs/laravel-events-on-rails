<?php

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

Route::get('/trains', function () {
    // get data from db
    $trains = [
        ['type' => 'steam houled', 'catering' => 'on diner', 'passengers' => 120],
        ['type' => 'steam houled', 'catering' => 'no catering', 'passengers' => 250],
        ['type' => 'steam houled', 'catering' => 'on diner', 'passengers' => 80]
    ];

    $name = request('name');

    return view('trains', [
        'trains' => $trains,
        'name' => $name,
        'age' => request('age')
    ]);
});

Route::get('/trains/{id}', function ($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
});
