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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
    //   'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('users', 'UserController@getUsers');
        Route::get('user', 'UserController@getUser');
    });
});

Route::group([
    'prefix' => 'restaurants'
], function() {
    Route::post('create', 'RestaurantController@store');
    Route::get('list', 'RestaurantController@index');
    Route::get('{id}', 'RestaurantController@show');
    Route::post('edit/{id}', 'RestaurantController@update');
    Route::delete('delete/{id}', 'RestaurantController@destroy');
});
