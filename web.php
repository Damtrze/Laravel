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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'MainTemplateController@index');

Route::get('/videos/test', 'VideosController@test');

Route::group(['middleware' => ['web']], function ()
{
/*	Route::post('/videos', 'VideosController@store');
	Route::get('/videos', 'VideosController@index');
	Route::get('videos/create', 'VideosController@create');
	Route::get('/videos/{id}', 'VideosController@show');
*/
	Route::resource('videos', 'VideosController');
	Route::resource('mypages', 'MyPagesController');
	Route::resource('mypages/sport', 'SportPagesController');

});


Auth::routes();

Route::get('/home', 'HomeController@index');


