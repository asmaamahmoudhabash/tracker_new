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

Route::get('/home', 'HomeController@index')->name('home');


Route::group(array('prefix' => 'AdminPanel', 'middleware' => 'auth'), function () {


    Route::resource('Tasks', 'TaskController');
    Route::resource('Projects', 'ProjectController');


    // tasks
    Route::get('finish_task/{id}','TaskController@finish_')->name('finished');
    Route::get('notFinish_task/{id}','TaskController@notFinish')->name('notFinished');


});