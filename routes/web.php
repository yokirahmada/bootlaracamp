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
    return view('welcome');
})->name('/');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('chekout', function () {
    return view('chekout');
})->name('chekout');
Route::get('success-chekout', function () {
    return view('success-chekout');
})->name('success-chekout');