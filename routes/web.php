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
Route::get('/classes', function () {
    return view('classes');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes(['verify'=>'true']);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verfied');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
