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

// Route::get('/', function () {
//     return view('show');
// })->name('show');

Route::get('/', 'RealestateController@index')->name('show');

Auth::routes();

//Realestate Routes
Route::get('/Add', 'RealestateController@create')->name('Add-realestate');
Route::post('/Add','RealestateController@store')->name('store-realestate');

//Edit realestate Routes
Route::get('/edit', 'RealestateController@edit')->name('edit-realestate');
Route::post('/edit/{id}','RealestateController@update')->name('update-realestate');

// your Real
Route::get('/yourReal', 'ViewsController@yourReal')->name('your_real');

