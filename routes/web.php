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

use App\Services\Translation\TransKey;

Route::group(
    [
        'prefix'=>'{locale?}',
    ], function(){
        Route::get('', 'FrontController@index')->name(TransKey::ROUTE_MAIN);
        Route::get('about-us', 'FrontController@aboutUs')->name(TransKey::ROUTE_ABOUT_US);
        Route::get('services', 'FrontController@services')->name(TransKey::ROUTE_SERVICES);
        Route::get('our-works', 'FrontController@ourWork')->name(TransKey::ROUTE_OUR_WORK);
        Route::get('contacts', 'FrontController@contacts')->name(TransKey::ROUTE_CONTACTS);
});
