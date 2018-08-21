<?php

/**
 * All route names are prefixed with 'admin.'.
 */
// Route::redirect('/', '/admin/dashboard', 301);
// Route::get('dashboard', 'DashboardController@index')->name('dashboard');

Route::group(['prefix' => ''], function () {
    Route::resource('post_category', 'PostCategoryController', ['except' => ['show']]);
});

Route::group(['prefix' => ''], function () {
    Route::resource('post', 'PostController', ['except' => ['show']]);
});