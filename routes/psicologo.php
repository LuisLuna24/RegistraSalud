<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('psicologo.panel');
})->name('psicologo.panel');

Route::get('/control/pacientes', function () {
    return view('psicologo.control.pacientes');
})->name('control.pacientes');

Route::get('/control/citas', function () {
    return view('psicologo.control.citas');
})->name('control.citas');
