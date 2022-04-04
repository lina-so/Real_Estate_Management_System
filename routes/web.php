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

Route::get('/', function () {
    return view('auth/register');
})->name('register');

Route::get('/show', 'RealestateController@index')->name('show');

Auth::routes();

//Add Realestate Routes
Route::get('/Add', 'RealestateController@create')->name('Add-realestate');
Route::post('/Add','RealestateController@store')->name('store-realestate');
//city Route
// Route::get('/Add', 'CityController@index')->name('city');

//Edit realestate Routes
Route::get('/edit/{id}', 'RealestateController@edit')->name('edit-realestate');
Route::put('/edit/{id}','RealestateController@update')->name('update-realestate');

// your Real
Route::get('/yourReal/{id}', 'ViewsController@yourReal')->name('your_real');

//details view
Route::get('/details/{id}', 'ViewsController@details')->name('details');



//Add Desire Routes
Route::get('/desire', 'DesireController@create')->name('Add-desire');
Route::post('/desire','DesireController@store')->name('store-desire');

//favoraite Route
Route::get('liked/{id}','FavoraiteController@like');

Route::get('/favoraite','FavoraiteController@index')->name('favoraite-show');
// Route::post('/add-to-favoraite','FavoraiteController@store')->name('favoraite-store');

// Route::delete('/favoraite/{realId}','FavoraiteController@destroy')->name('favoraite-destroy');
// Route::get('/favoraite/realestates','FavoraiteController@index')->name('favoraite-index');

/* view composer */
View::composer(['*'],function($view)
{
  $user = Auth::user();
  $view->with('user',$user);
});