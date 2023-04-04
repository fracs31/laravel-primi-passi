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

//Home
Route::get('/', function () {
    return view('home');
});

//Contatti
Route::get('/contacts', function () {
    return view('contacts');
});

//About
Route::get('/about', function () {
    return view('about');
});

//Servizi
Route::get('/services', function () {
    return view('services');
});