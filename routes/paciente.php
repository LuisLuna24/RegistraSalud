<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('paciente.panel');
})->name('paciente.panel');
