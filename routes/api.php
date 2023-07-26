<?php

use App\Http\Controllers\PilabController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, this is the API!';
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('/', function () {
        return 'Hello, this is the v1 API!';
    });
    logger('access', ['mes' => 'get/post']);
    Route::get('/pilab', [PilabController::class, 'index']);

    logger('access', ['mes' => 'post']);
    Route::post('/pilab', [PilabController::class, 'store']);
});
