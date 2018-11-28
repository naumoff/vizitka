<?php


Auth::routes(['verify' => true]);

Route::get('/panel', 'Dashboard\PanelController@index')
    ->name('panel')
    ->middleware(['auth', 'verified', 'approved']);

Route::get('/confirmation-stand-by', function () {
    return view('auth.confirmation-stand-by');
})
    ->name('confirmation-stand-by')
    ->middleware(['auth']);
