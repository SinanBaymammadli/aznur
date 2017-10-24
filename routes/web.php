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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/{locale?}')->middleware('locale')->group(function () {
  Route::get('/', function () {
      return view('welcome');
  });

  Route::get('/about', function () {
    return view('about');
  });

  Route::get('/contact', function () {
    return view('contact');
  });

  Route::resource('/products', 'ProductController');

  Route::group(['middleware' => 'auth'], function() {
    Route::resource('products', 'ProductController', ['except' => ['index', 'show']]);
  });
});
