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

Route::get('/login', function () {
    return view('login');
});


Route::get('/', function () {
    return view('hal1');
});

Route::get('/', function () {
    return view('hal2');
});

Route::get('/', function () {
    return view('hal3');
});

Route::get('/', function () {
    return view('hal4');
});

Route::get('/', function () {
    return view('hal5');
});

Route::get('/', function () {
    return view('hal6');
});
