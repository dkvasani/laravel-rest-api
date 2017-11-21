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



//Route::get('articles', 'ArticleController@index');
//Route::get('articles/{id}', 'ArticleController@show');
//Route::post('articles', 'ArticleController@store');
//Route::put('articles/{id}', 'ArticleController@update');
//Route::delete('articles/{id}', 'ArticleController@delete');

Route::post('register', 'Auth\RegisterController@register')->name("register");
Route::post('login', 'Auth\LoginController@login')->name("login");
Route::post('logout', 'Auth\LoginController@logout')->name("logout");

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('articles', 'ArticleController@index')->name("articles");
    Route::get('articles/{article}', 'ArticleController@show')->name("articles-show");
    Route::post('articles', 'ArticleController@store')->name("articles-store");
    Route::put('articles/{article}', 'ArticleController@update')->name("articles-update");
    Route::delete('articles/{article}', 'ArticleController@delete')->name("articles-delete");
});
