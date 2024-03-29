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

Route::get('/', 'MainController@home');

Route::get('/guests' , 'MainController@guestList');

Route::get('/guest/new' , 'MainController@createGuest');

Route::post('/guest/new' , 'MainController@storeGuest');

Route::get('/guest/quit/{id}' , 'MainController@quitGuest');