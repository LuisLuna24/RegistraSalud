<?php

use Illuminate\Support\Facades\Route;

Route::get('/panel', function () {
    return view('admin.panel');
})->name('admin.panel');

Route::get('/control/usuarios', function () {
    return view('admin.control.usuarios');
})->name('control.usuarios');

Route::get('/control/subscripciones', function () {
    return view('admin.control.subscripciones');
})->name('control.subscripciones');


