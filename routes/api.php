<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\Api'], function ()
{
	Route::get('cards', 'CardsController@index');
    Route::get('cards/{id}', 'CardsController@view');
    Route::post('cards', 'CardsController@create');
    Route::post('cards/{id}', 'CardsController@update');
    Route::get('public-key', 'CardsController@publicKey');
});
