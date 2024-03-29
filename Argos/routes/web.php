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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'AppController@index');
Route::get('/log', 'AppController@log');
Route::get('/dedut', 'AppController@dedut');
Route::get('/list', 'AppController@list');
Route::get('/cont', 'AppController@cont');
Route::post('/testlog', 'AppController@testlog');
