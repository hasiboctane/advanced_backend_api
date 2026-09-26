<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check', function () {
    return response()->json(['message' => 'Hello, World!']);
});
Route::get('/about', function () {
    return "About Page";
});
