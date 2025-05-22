<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use App\Events\TestingEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Session\Middleware\AuthenticateSession;
use App\Http\Controllers\ReservationController;
Route::get('/', function () {
    return view('Home');
});
// Route::get('/bookNow', function () {
//     return view('ClientBookNow');
// });
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

Route::controller(ReservationController::class)->group(function(){
    Route::get('/Lot_group', 'Lot_group')->name('Lot_group');
    Route::get('/Available_lot', 'Available_lot')->name('Available_lot');
});

