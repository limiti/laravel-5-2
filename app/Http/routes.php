<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('cards','CardsController@index');
    Route::get('cards/{card}','CardsController@show');


    Route::post('cards/{card}/notes','NotesController@store');

    Route::get('/cards/{card}/edit','CardsController@edit');


    Route::post('/cards/{card}/update','CardsController@update');


    Route::get('/todo','TodosController@index');
    Route::post('/todo/create','TodosController@create');

    Route::get('/todo/{id}','TodosController@show');

    Route::get('todo/{id}/edit','TodosController@edit');
    Route::post('todo/{id}/edit/update', 'TodosController@update');

});





