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
    return view('layouts.home');
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/shop', function () {
    return view('layouts.shop');
})->name('shop');

Route::middleware(['auth:sanctum', 'verified'])->get('/features', function () {
    return view('layouts.features');
})->name('features');

Route::middleware(['auth:sanctum', 'verified'])->get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/contact', function () {
    return view('layouts.contact');
})->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/product-detail', function () {
    return view('layouts.productDetail');
})->name('detail');
