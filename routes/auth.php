<?php


Auth::routes(['verify' => true]);

Route::get('/home', 'Dashboard\PanelController@index')->name('home')->middleware('auth');
