<?php


Auth::routes(['verify' => true]);

Route::get('/panel', 'Dashboard\PanelController@index')->name('panel')->middleware(['auth', 'verified']);
