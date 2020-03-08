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

Route::middleware('auth:api')->get(
    '/user',
    function (Request $request) {
        return $request->user();
    }
);

// 提供給 swagger 所需要的數據
Route::get('get-api-document', 'APIDocsController@getJSON');

Route::get('login/{platform}', 'APIs\LoginController@show');

// 用來測試是否能回音 Client 端的參數
Route::get('echo', 'APIs\EchoController@show');
Route::post('echo', 'APIs\EchoController@store');
Route::put('echo', 'APIs\EchoController@update');
Route::delete('echo', 'APIs\EchoController@destroy');
