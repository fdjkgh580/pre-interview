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

Route::get('/', function () {
    return view('guideline');
});

Route::get('example', 'ExampleController@index');

Route::get('static/{page}', 'StaticPageController@index');

Route::get('api-document', 'APIDocsController@index');
