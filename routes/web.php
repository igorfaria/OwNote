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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/notes', 'Back\NotesController@index')->name('home');
Route::get('/notes/add', 'Back\NotesController@add')->name('notes.add');
Route::post('/notes/add', 'Back\NotesController@save')->name('notes.save');



