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
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false,
]);

Route::get('/posts', 'BlogController@index')->name('blog');
Route::get('/post/new', 'BlogController@create')->name('new-blog')->middleware('auth');
Route::post('/post/new', 'BlogController@store')->name('store-blog')->middleware('auth');
Route::get('/post/{slug}', 'BlogController@show')->name('view-blog');
