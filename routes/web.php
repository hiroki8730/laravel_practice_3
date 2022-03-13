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

Route::get('hello', 'HelloController@index')->name('hello');
Route::post('hello/check', 'HelloController@check')->name('check');

Route::post('hello/send', 'HelloController@send')->name('send');

Route::get('thanks', 'HelloController@thanks')->name('thanks');

Route::get('list', 'HelloController@listView');

Route::get('hello/del', 'HelloController@delete')->name('delete');
Route::post('hello/del', 'HelloController@remove')->name('remove');