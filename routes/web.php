<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jadwal-dokter', function () {
    return view('jadwal_dokter');
});
Route::get('/', function () {
    return view('home');
});
