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


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/home', function()
{
	return view("home");
});

Route::get('/homes', function()
{
	return view("homes");
});

Route::get('/users','CollectionController@index');




Route::resource('journals', 'JournalsController');

//Route::patch('/types/{type}','CarTypesController@update'); 

Route::post('/journals/{journal}/todays','TodaysController@store'); 

Auth::routes();

Route::get('/signup', 'HomeController@index')->name('home')->middleware('auth');


