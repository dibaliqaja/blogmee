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

Route::get('/','BlogController@index');
Route::get('/about','BlogController@about');
Route::get('/isipost/{slug}','BlogController@isiblog')->name('blog.isi');
Route::get('/list-category/{category}','BlogController@list_category')->name('blog.category');
Route::get('/search','BlogController@search')->name('blog.search');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');
    Route::resource('/post','PostController');
    // Route::resource('/user','UserController');
});

Auth::routes();
