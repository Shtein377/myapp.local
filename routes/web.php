<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\FailController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {                                                                       
    return view('welcome');
});

Route::get('test',TestController::class);

Route::get('data',DataController::class);

Route::get('fail',FailController::class);