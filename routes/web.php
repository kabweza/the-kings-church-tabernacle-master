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
Route::get('/contact/us', 'HomeController@getContact');

Route::post('/post/contact/us', 'HomeController@saveContact');

Route::get('/event/{title}', 'HomeController@lastEventPage');

Route::get('/church/activities', 'HomeController@activities')->name('activities');

Route::get('/church/schedule', 'HomeController@schedule')->name('schedule');

Route::get('/church/care/ministry', 'HomeController@careMinistry')->name('care');

Route::get('/church/mission', 'HomeController@mission')->name('mission');

Route::get('/church/request/prayer', 'HomeController@requestPrayer')->name('prayer');

Route::get('intercessory/prayer/network', 'HomeController@ipn')->name('ipn');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('/contact/us', 'HomeController@contact')->name('contact');

Route::get('events', 'HomeController@event')->name('event');

Route::get('books', 'HomeController@book')->name('book');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
