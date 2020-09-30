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

Route::get('/','CartController@Index' );
Route::get('/Add-Cart/{id}','CartController@AddCart' );
Route::get('/Delete-Item-Cart/{id}','CartController@DeleteItemCart' );
Route::get('/List-Cart','CartController@ViewListCart' );