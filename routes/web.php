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

Route::get('/', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

// Route::get('/reservations', function () {
//     return view('reservations');
// });

Route::get('/reservations', 'ReservationController@index');

Route::get('/reservations/create', 'ReservationController@create');

Route::get('/reservations/{reservation}/edit', 'ReservationController@edit');

Route::post('/reservations', 'ReservationController@store');

Route::patch('/reservations/{reservation}', 'ReservationController@update');

Route::delete('/reservations/{reservation}', 'ReservationController@destroy');


// Route::get('/login', 'HomeController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
