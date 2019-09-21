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
    return view('homepage');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});

Route::get('/book', function () {
    return view('bookappointment');
});

Route::post('/contact/submit','MessageController@submit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
