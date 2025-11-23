<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    \Log::info('Welcome page accessed');
    return view('welcome');
});
