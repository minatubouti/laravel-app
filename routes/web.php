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

Route::get('/home', 'HomeController@index');
Route::get('/', 'TodolistFormController@index');
Route::get('/create-page', 'TodolistFormController@createPage');
Route::post('/create', 'TodolistFormController@create');
Route::get('/edit-page/{id}', 'TodolistFormController@editPage');
Route::post('/edit', 'TodolistFormController@edit');
Route::get('/delete-page/{id}', 'TodolistFormController@deletePage');
Route::delete('/delete/{id}', 'TodolistFormController@delete');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
