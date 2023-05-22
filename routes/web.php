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
    return view('index', [
        "title" => "Home"
    ]);
});
Route::get('/product', function () {
    return view('product', [
        "title" => "Product"
    ]);
});
Route::get('/augmentedrealty', function () {
    return view('detailproduct.augmentedreality', [
        "title" => "Augmented Reality"
    ]);
});
Route::get('/tour&travel', function () {
    return view('tour&travel', [
        "title" => "Tour & Travel"
    ]);
});
Route::get('/Masjid-Baiturahman', function () {
    return view('detailtour.masjidaceh', [
        "title" => "Masjid Baiturahman"
    ]);
});
Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::get('/service', function () {
    return view('service', [
        "title" => "Service"
    ]);
});
Route::get('/music', function () {
    return view('detailservice.music', [
        "title" => "Detail Service"
    ]);
});
Route::get('/pendaftaran', function () {
    return view('detailservice.formulirdaftar.pendaftaran', [
        "title" => "Formulir Pendaftaran"
    ]);
});
Route::get('/login', function () {
    return view('login', [
        "title" => "Login"
    ]);
});
Route::get('/registrasi', function () {
    return view('registrasi', [
        "title" => "Register"
    ]);
});

