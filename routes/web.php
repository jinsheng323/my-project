<?php

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Route::get('services/servicefilter', 'Admin\ServiceController@servicefilter')->name('admin.services.servicefilter');
Route::get('/sendemail/send', 'SendEmailController@send')->name('sendmail');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    Route::delete('service-s/destroy', 'ServiceController@massDestroy')->name('service-s.massDestroy');
    Route::resource('service-s', 'ServiceController');

});
