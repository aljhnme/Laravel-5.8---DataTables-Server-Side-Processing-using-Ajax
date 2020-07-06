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
Route::get('dynamic-input', 'DynamicFieldController@index');

Route::post('dynamic-input/insert_data', 'DynamicFieldController@insert_data')->name('dynamic-field.insert_data');
