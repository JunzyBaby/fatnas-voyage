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
    return view('user.home');
})->name('home');

Route::get('accueil', function () {
    return view('user.home');
})->name('accueil');

Route::get('reservation', function () {
    return view('user.reservation');
});

Route::get('about', function () {
    return view('user.about');
});

Route::get('register', function () {
    return view('user.register');
});

Route::get('contact', function () {
    return view('user.contact');
});

Route::get('index', function () {
    return view('user.index');
});

Route::get('/admin',function()
{
	return view('admin.index');
});