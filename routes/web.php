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

    Route::post('/posts',['uses' => 'Voyager\PostController@store', 'as' => 'voyager.posts.store']);
    Route::get('/posts',['uses' => 'Voyager\PostController@index', 'as' => 'voyager.posts.index']);
    Route::get('/postdata/pending',['uses' => 'Voyager\PostController@pending']);
    Route::get('/posts/{post}/edit',['uses' => 'Voyager\PostController@edit', 'as' => 'voyager.posts.edit']);
//    Route::get('/topviewers',['uses' => 'Admin\PostController@topviews']);
    Route::put('/posts/{post}','Voyager\PostController@update')->name('voyager.posts.update');
});

Auth::routes();


Route::get('/', 'MainController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/recent-post', 'MainController@recentPost');
Route::get('/page/{slug}', 'MainController@page');
Route::get('/category/{slug}', 'ListArticleController@index');
Route::get('/{slug}','Api\PostController@view');
Route::get('/formulir/directory/', 'FormController@directoryForm')->name('directory');
Route::get('/post/cari','ListArticleController@search')->name('search');


Route::post('/formulir/directory/post-hotel', 'FormController@postHotel')->name('postHotel');
Route::post('/formulir/directory/post-food-drink', 'FormController@postFoodDrink')->name('postFoodDrink');
Route::post('/formulir/directory/post-activity', 'FormController@postActivity')->name('postActivity');
Route::post('/formulir/directory/post-product', 'FormController@postProduct')->name('postProduct');
Route::post('/subscribe', 'FormController@postSubscribe')->name('postSubscribe');
