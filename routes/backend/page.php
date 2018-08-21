<?php
Route::group(['prefix' => ''], function () {
    Route::resource('page', 'PageController', ['except' => ['show']]);
});