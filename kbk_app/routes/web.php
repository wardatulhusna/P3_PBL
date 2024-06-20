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
    return view('welcome');
});

Route::get('/template', function () {
    return view('layout.landingpage');
});
Route::get('/dosen', function () {
    return view('page.dosen');
});
Route::get('/about', function () {
    return view('layout.about');
});
Route::get('/contact', function () {
    return view('layout.contact');
});
Route::get('/dosen', function () {
    return view('page.dosen');
});
Route::get('/dosen', function () {
    return view('page.dosen');
});

