<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
Route::get('/bookNow', function () {
    return view('ClientBookNow');
});
Route::get('/dashboard', function () {
    return view('Dashboard');
});
Route::get('/customer', function () {
    return view('Customers');
});
Route::get('/customerReservation', function () {
    return view('customerReservation');
});
Route::get('/lot', function () {
    return view('BurialLot');
});
Route::get('/report', function () {
    return view('Report');
});