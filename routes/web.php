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
 

Route::get('/','NewspaperController@index');
Route::get('news/index','NewspaperController@index');
Route::get('news/form','NewspaperController@form');
Route::post('news/create','NewspaperController@create');
