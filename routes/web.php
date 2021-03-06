<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/users/{id}/history', 'UserController@getAllBinaryOptions');

Route::get('/users/{id}/changePass', 'UserController@getChangePassForm');

Route::post('/users/changePass', 'UserController@changePass');

Route::get('/currencies','CurrenciesController@showAll');

Route::get('/currencies/{id}','CurrenciesController@showById');

Route::get('/balmer','ScheduleActionController@hourlyAction');

Route::get('/install','AdminController@installCurrencies');

Route::post('/boption/create','BinaryOptionController@createBinaryOption');

Route::post('/articles/create','ArticleController@add');

Auth::routes();

Route::post('/password/email','Auth\ForgotPasswordController@checkEmailExisting');


