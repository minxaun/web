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

Route::get('/', ['as' => 'index', 'uses' => 'ProductController@index']);
Route::get('/productData', ['as' => 'productData', 'uses' => 'ProductController@productData']);
Route::get('/searchProduct', ['as' => 'searchProduct', 'uses' => 'ProductController@searchProduct']);
