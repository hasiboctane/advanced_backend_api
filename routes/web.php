<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check', function () {
    return response()->json(['message' => 'Hola Amigo!'], 200);
});
Route::get('/about', function () {
    return "This is the About Page for testing purpose";
});
