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

    Route::get('/J/{D}/{M}/{Y}','CallController@getJewishDate');
    Route::get('/G/{D}/{M}/{Y}','CallController@getGregorianDate');
//    Route::get('/paypal-transaction-complete','PayCheckout@getOrder');
    Route::resource('/kadish','KaddishController')->only('index','show','create','update');
    Route::get('/plaques','PlaquasController@getPlaquas');
