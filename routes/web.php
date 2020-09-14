<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/page/{URI}', 'PageController@show');
Route::get('/page/{URI}', 'NavController@show');
Route::get('/page/{URI}/edit', 'PageController@edit');
Route::get('/p', 'PageController@index');
Route::get('/createPage', 'PageController@create');
Route::post('/storePage', 'PageController@store');
Route::post('/patchPage', 'PageController@store');
Route::patch('/page/{URI}', 'PageController@update');
Route::delete('/page/{URI}', 'PageController@destroy');
Route::get('/createProduct', 'ProductController@create');
Route::post('/storeProduct', 'ProductController@store');
Route::get('/pr', 'ProductController@index');
Route::get('/product/{productName}/edit', 'ProductController@edit');
Route::patch('/product/{productName}', 'ProductController@update');
Route::delete('/product/{productName}', 'ProductController@destroy');
