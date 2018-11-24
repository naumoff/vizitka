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

use App\Services\Translation\TransKeyService;

Route::group(
    [
        'prefix'=>'{locale?}',
    ],
    function () {
        Route::get('', 'FrontController@index')->name(TransKeyService::ROUTE_MAIN);
        Route::get('about-us', 'FrontController@aboutUs')->name(TransKeyService::ROUTE_ABOUT_US);
        Route::get('services', 'FrontController@services')->name(TransKeyService::ROUTE_SERVICES);
        Route::get('our-works', 'FrontController@ourWork')->name(TransKeyService::ROUTE_OUR_WORK);
        Route::get('contacts', 'FrontController@contacts')->name(TransKeyService::ROUTE_CONTACTS);
    }
);
