<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.dashboard');
});

Route::get('/sej', function () {
    return view('user.sejarah');
});

Route::get('/vimi', function () {
    return view('user.visimisi');
});

Route::get('/tuj', function () {
    return view('user.tujuan');
});

Route::get('/ked', function () {
    return view('user.kedudukan');
});

Route::get('/stor', function () {
    return view('user.stor');
});


