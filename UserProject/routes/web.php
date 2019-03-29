<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/create', function () {
  //  return view('registration');
//});
// Route::get('/registration','RegistrationController@create');
//  Route::post('/registration','RegistrationController@store');
// Route::get('/users','RegistrationController@show');


// Route::get('/login','LoginController@create');

// Route::post('/login','LoginController@loginCheck');
// Route::get('/login','RegistrationController@loginCheck');
//Route::get('/user2','LoginController@show');

//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
