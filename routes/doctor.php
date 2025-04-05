<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('doctor.panel');
})->name('doctor.panel');
