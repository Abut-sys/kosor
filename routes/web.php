<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coffee.index');
});

// POS page for cashier (Livewire)
Route::get('/pos', function () {
    return view('pos');
})->name('pos');
