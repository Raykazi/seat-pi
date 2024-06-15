<?php

Route::group([
    'namespace' => 'Raykazi\Seat\PI\Http\Controllers',
], function () {
    Route::group([
        'prefix'     => 'seat-pi',
        'middleware' => ['web', 'auth', 'locale'],
    ], function () {
    });

    Route::group([
        'namespace'  => 'Api',
        'middleware' => ['api.request', 'api.auth'],
        'prefix'     => 'api',
    ], function () {
        Route::group([
            'namespace' => 'V2',
            'prefix'    => 'v2',
        ], function () {
            Route::group([
                'prefix' => 'seat-pi',
            ], function () {
                Route::get('/planets/{character_id}')->uses('CharacterController@getPlanets');
            });
        });
    });
});
