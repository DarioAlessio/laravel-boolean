<?php

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

Route::get('start', function () {
    return view('start');
});

Route::get('start1', function () {
    return view('start1', ['saluto' => 'ciaoooooneee']);
});
Route::get('start2', function () {
    return view('start2', ['name' => 'Giulio Cesare']);
});
// Route::get('start3', 'MainController@test');
Route::get('start3', 'MainController@test2');
// Route::get('start3', 'MainController@test3');
