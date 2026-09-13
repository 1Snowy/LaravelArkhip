<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloo', function () {
    return view('hello', ['name' => 'Hello surgu']);
});