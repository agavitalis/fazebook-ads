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


Route::get('/pub', 'PublisherController@index')->name('publisherhome');

Route::get('/plan', 'PublisherController@plans')->name('publisherplan');

Route::match(['post','get'],'/postadd', 'PublisherController@postadd')->name('publisherpostadd');

Route::match(['post','get'],'/profile/{id?}', 'PublisherController@profile')->name('publisherprofile');

Route::get('/referal', 'PublisherController@referal')->name('publisherreferal');

Route::get('/cashout', 'PublisherController@cashout')->name('publishercashout');



// //lets take care of the publisher
// Route::get('/publisher', 'PublisherController@index')->name('publisherhome');

// Route::get('/publisher', function () {
//     return view('publisher.index');
// });