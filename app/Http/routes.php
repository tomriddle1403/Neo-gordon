<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {


    Route::controller('auth', 'Auth\AuthController', [
        'getLogin' => 'auth.login',
        'getLogout' => 'auth.logout'

    ]);

    Route::group(['prefix' => 'back-office'], function () {
        Route::get('login', [
            'as' => 'admin.login',
            'uses' => 'Admin\Auth@login',
        ]);

        Route::get('logout', [
            'as' => 'admin.logout',
            'uses' => 'Auth\AuthController@getLogout',
        ]);

        // For authenticated users only
        // Route::group(['middleware' => ['auth']], function () {
        Route::group([], function () {
            Route::get('/', [
                'as' => 'admin.home.index',
                'uses' => 'Admin\Home@index'
            ]);
        });


    });
});
