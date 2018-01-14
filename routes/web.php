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


Route::get('/', 'PageController@home');
Route::get('/leagues/', 'PageController@leagues');
Route::get('/forum', 'PageController@underconstruction');
Route::get('/cockpit', 'PageController@underconstruction');
Route::get('/aboutsims', 'PageController@underconstruction');

Route::get('/LFS', 'SimController@LFS');
Route::get('/RaceRoom', 'SimController@RaceRoom');

Route::get('article/{id}','ArticleController@article');
Auth::routes();

Route::get('/home', 'HomeController@index');
