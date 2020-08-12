<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ColorsController@index');

Route::get('/colors', function () {
	return view('colors.index', [
		'colors' => App\Color::latest()->get()
	]);
});

Route::get('/colors', 'ColorsController@index');
Route::post('/colors', 'ColorsController@store');
Route::get('/colors', 'ColorsController@create');
Route::get('/colors', 'ColorsController@show');
Route::get('/colors/{colors}', 'ColorsController@edit');
Route::put('/colors/', 'ColorsController@update')->name('update.post'); 
Route::delete('colors/{colors}', 'ColorsController@destroy');


