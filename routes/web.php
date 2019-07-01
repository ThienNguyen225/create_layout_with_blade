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
Route::get('tasks/index', 'TaskController@index')->name('task.list');
Route::get('tasks/create', 'TaskController@create')->name('task.create');
Route::post('tasks/create', 'TaskController@store')->name('task.store');
Route::get('tasks/show/{id}', 'TaskController@show')->name('task.show');
Route::get('tasks/edit/{id}', 'TaskController@edit')->name('task.edit');
Route::post('tasks/update/{id}', 'TaskController@update')->name('task.update');
Route::get('tasks/delete/{id}', 'TaskController@delete')->name('task.delete');
Route::post('tasks/destroy/{id}', 'TaskCohttps://github.com/ThienNguyen225/create_layout_with_blade.gitntroller@destroy')->name('task.destroy');