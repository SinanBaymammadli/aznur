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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::prefix('/{locale?}')->middleware('locale')->group(function () {

//   Route::get('/', 'WelcomeController@index')->name('welcome');

//   Route::get('/about', function () {
//     return view('about');
//   });

//   Route::get('/contact', 'ContactController@index');

//   Route::post('/contact', 'ContactController@sendEmail')->name('sendEmail');

//   Route::resource('/products', 'ProductController');

//   Route::group(['middleware' => 'auth'], function() {
//     Route::resource('products', 'ProductController', ['except' => ['index', 'show']]);
//   });

// });

Route::get('{any?}', function() {
  return view('soon');
});