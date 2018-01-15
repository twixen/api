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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('/')->group(function() {
    Route::get('get_item/{item}', 'ItemsController@getItem')->name('get_item');
    Route::get('get_more_five', 'ItemsController@getMoreFive')->name('get_more_five');
    Route::get('get_not_available', 'ItemsController@getNotAvailable')->name('get_not_available');
    Route::get('get_available', 'ItemsController@getAvailable')->name('get_available');
    Route::post('add', 'ItemsController@add')->name('add');
    Route::put('edit/{item}', 'ItemsController@edit')->name('edit');
    Route::delete('delete/{item}', 'ItemsController@destroy')->name('delete');
});

