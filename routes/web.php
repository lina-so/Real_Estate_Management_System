<?php

use Illuminate\Support\Facades\Route;

use RealRashid\SweetAlert\Facades\Alert;


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
  //   // Alert::success('Success Title', 'Success Message');
  //   // alert()->info('InfoAlert','Lorem ipsum dolor sit amet.');

  //     return view('auth/register');
  // })->name('register');

Route::get('/', 'RealestateController@index')->name('show');

//Localization Route
Route::get("locale/{lange}", 'LocalizationController@setLang');

//show Route
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

//Reserve Route
Route::get('reserve/{id}','ReserveController@reserve');

Route::get('/reserve','ReserveController@index')->name('reserve-show');

//delete 
Route::delete('/delete/{id}','RealestateController@destroy')->name('delete');

//delete 
Route::delete('/deletefav/{id}','FavoraiteController@destroy')->name('delete-favoraite');

/* view composer */
View::composer(['*'],function($view)
{
  $user = Auth::user();
  $view->with('user',$user);
});


//display image store
Route::get('storage/app/images/loloo_4_07-04-22_15_50_04/{filename}', 'ViewsControllers@getPubliclyStorgeFile')->name('displayImage');