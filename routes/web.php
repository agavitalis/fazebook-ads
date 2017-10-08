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

Route::match(['post','get'],'/postadd/{id?}', 'PublisherController@postadd')->name('publisherpostadd');

Route::match(['post','get'],'/profile/{id?}', 'PublisherController@profile')->name('publisherprofile');

Route::get('/referal', 'PublisherController@referal')->name('publisherreferal');

Route::match(['post','get'],'/cashout/{id?}', 'PublisherController@cashout')->name('publishercashout');



//the admin part starts here, the admin will have two controllers, Advertcontroller
//Pub_ad Controller
//both will take care of uploadind adverts and crediting the user an
//deleting adverts
//managing add is here
Route::get('/admin', 'AdminController@index')->name('adminindex');
Route::get('/ads/publish', ['as' => 'publishedad','uses' => 'AdvertController@publishedads']);
Route::post('/ads/publish', ['as' => 'publishad','uses' => 'AdvertController@publishad']);
Route::post('/ads/unpublish', ['as' => 'unpublishad','uses' => 'AdvertController@unpublishad']);
Route::post('/ads/delete', ['as' => 'deletead','uses' => 'AdvertController@deleteads']);

Route::get('/ads/add', ['as' => 'ads','uses' => 'AdvertController@addads']);
Route::post('/ads/add', ['as' => 'addads','uses' => 'AdvertController@addads2']);

//Confirmation Controllers for admin
Route::get('/confirmads', ['as' => 'confirmads','uses' => 'EvidenceController@confirmads']);
Route::get('/confirmads/{ad_id}', ['as' => 'confirm_user','uses' => 'EvidenceController@confirm_user']);
Route::post('/confirmads/{ad_id}', ['as' => 'confirmad_user2','uses' => 'EvidenceController@confirmad_user2']);
Route::post('/credit', ['as' => 'credit_user','uses' => 'EvidenceController@credit_user']);
