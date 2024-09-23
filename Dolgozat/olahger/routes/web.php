<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('bejelentkezes', function () {
    return view('bejelentkezes');
});

Route::get('bemutatkozas', function () {
    return view('bemutatkozas');
});

Route::get('felhasznalo', function () {
    return view('felhasznalo');
});

