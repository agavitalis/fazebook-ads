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
    return view('general.index');
});

Route::get('/about', function () {
    return view('general.about');
});

Route::get('/howitworks', function () {
    return view('general.howitworks');
});

Route::get('/marketplace', function () {
    return view('general.marketplace');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/homee', 'PublisherController@index')->name('home');

// //lets take care of the publisher
// Route::get('/publisher', 'PublisherController@index')->name('publisherhome');

// Route::get('/publisher', function () {
//     return view('publisher.index');
// });