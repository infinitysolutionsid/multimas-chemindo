<?php

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
    return view('homepage.index');
});
Route::get('/about-us', function () {
    return view('homepage.about');
});
Route::get('/contact-us', function () {
    return view('homepage.contact');
});
Route::get('/warehouse', function () {
    return view('homepage.warehouse');
});
Route::get('/our-fertilizers', function () {
    return view('homepage.ourfertilizers');
});
Route::get('/our-suppliers', function () {
    return view('homepage.suppliers');
});
