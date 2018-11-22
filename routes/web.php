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

Route::get('/', 'FrontController@index');

Route::get('about-us', 'FrontController@aboutUs');
Route::get('services', 'FrontController@services');
Route::get('our-works', 'FrontController@ourWorks');
Route::get('contacts', 'FrontController@contacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
