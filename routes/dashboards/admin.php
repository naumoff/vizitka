<?php
/**
 * User: Andrey Naumoff
 * Date: 22-Nov-18
 * Time: 3:26 PM
 * E-mail: andrey.naumoff@gmail.com
 */

use App\Model\Role;

Route::group(
    [
        'middleware' => 'role:'. Role::ADMIN .','. Role::CONTENT_MANAGER
    ],
    function () {
        Route::get('/admin', 'AdminController@index')->name('admin');
    }
);
