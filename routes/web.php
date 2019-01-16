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

Route::get('/todos', 'PagesController@index')->name('todos');

Route::post('/create/todo', 'PagesController@store');

Route::get('/delete/todo/{id}', 'PagesController@delete')->name('delete');

Route::get('/update/todo/{id}', 'PagesController@getEdit')->name('update');

Route::post('/update/todo/{id}', 'PagesController@postEdit');

Route::get('completed/todo/{id}', 'PagesController@completed')->name('completed');