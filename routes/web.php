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

Route::get('/test', 'testController@test');
Route::get('/', 'user\homeController@home');
Route::get('/list-product', 'user\list_product_controller@index');
Route::get('/detail-product', 'user\detail_product_controller@index');


Route::get('/admin', 'admin\homeAdminController@home');