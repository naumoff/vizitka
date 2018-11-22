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
        'where'=>['locale' => '[a-z][a-z]']
    ], function(){
        Route::get('test', function($locale){
            dump($locale);
        });
        Route::get('', 'FrontController@index')->name('main');
        Route::get('about-us', 'FrontController@aboutUs')->name('about-us');
        Route::get('services', 'FrontController@services')->name('services');
        Route::get('our-works', 'FrontController@ourWorks')->name('our-works');
        Route::get('contacts', 'FrontController@contacts')->name('contacts');
});

