<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('get-tags','Api\TagController@getTags');
Route::get('get-all-tags','Api\TagController@getAllTags');
Route::get('get-all-categories','Api\CategoryController@index');
Route::get('sliders','Api\SliderController@index');
Route::get('post-category/{slugcat}/{limit}','Api\PostController@getByCategory');
Route::get('post/{slug}', 'Api\PostController@getBySlug');
