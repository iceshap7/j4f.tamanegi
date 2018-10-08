<?php

Route::group([

    'prefix' => 'api/v1',
    'namespace' => 'Core\Modules\Api\Controllers',
    'middleware' => 'api',

], function() {

    Route::get('/', function () { return 'Laravel version: ' . app()->version(); });
    Route::post('/talk', 'MessageController@talk');
});