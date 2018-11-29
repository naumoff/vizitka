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

Route::group(
    [
        'prefix'=>'{locale?}',
    ],
    function () {
        Route::get('', 'FrontController@index')->name('main');
        Route::get('about-us', 'FrontController@aboutUs')->name('about-us');
        Route::get('services', 'FrontController@services')->name('services');
        Route::get('our-works', 'FrontController@ourWork')->name('our-work');
        Route::get('contacts', 'FrontController@contacts')->name('contacts');
    }
);
