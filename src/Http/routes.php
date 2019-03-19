<?php

Route::group(['prefix' => 'adminpanel','middleware' => ['admin:protected'],'namespace' => 'HRZ\Cms\Http\Controllers'], function () {
    Route::get('/', 'AdminPanelController@index');
    Route::get('config', function () {
        return config('cms');
    });
});
