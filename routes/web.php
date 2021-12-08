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
Route::get('/fertilizers', function () {
    return view('homepage.ourfertilizers');
});
Route::get('/partners', function () {
    return view('homepage.partners');
});
Route::get('/faqs', function () {
    return view('homepage.faqs');
});
