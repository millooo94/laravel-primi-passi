<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/europe', function () {
    return view('europe');
});

Route::get('/africa', function () {
    return view('africa');
});

Route::get('/asia', function () {
    return view('asia');
});

Route::get('/north-america', function () {
    return view('north-america');
});

Route::get('/south-america', function () {
    return view('south-america');
});

Route::get('/oceania', function () {
    return view('oceania');
});

Route::get('/antartica', function () {
    return view('antartica');
});


