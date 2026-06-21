<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/pelanggan', function () {
    return view('customers.index');
});

Route::get('/kendaraan', function () {
    return view('vehicles.index');
});

Route::get('/sparepart', function () {
    return view('spareparts.index');
});

Route::get('/servis', function () {
    return view('services.index');
});