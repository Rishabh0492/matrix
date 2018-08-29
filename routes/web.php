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
Route::get('/show','StaffController@show');
Route::get('/getData','StaffController@getData');
Route::get('/create','StaffController@create');
Route::post('/store','StaffController@store');
Route::get('show/delete/{id}','StaffController@destroy');
Route::get('show/{id}/edit','StaffController@edit');
Route::post('show/update','StaffController@update');

