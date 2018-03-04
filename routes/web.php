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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::post('/posts',['uses' => 'Admin\PostController@store', 'as' => 'voyager.posts.store']);
    Route::get('/posts',['uses' => 'Admin\PostController@index', 'as' => 'voyager.posts.index']);
    Route::get('/post-pandding',['uses' => 'Admin\PostController@padding']);
    Route::get('/posts/{post}/edit',['uses' => 'Admin\PostController@edit', 'as' => 'voyager.posts.edit']);
    Route::put('/posts/{post}','Admin\PostController@update')->name('voyager.posts.update');
});

Auth::routes();


Route::get('/', 'MainController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{slug}','Api\PostController@view');
