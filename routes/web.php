<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    \Log::info('Welcome page accessed', [
        'user' => User::all(),
    ]);
    dd(User::all());
    return view('welcome');
});
