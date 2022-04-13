<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\ChekoutController;
use App\Http\Controllers\HomeController;

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
})->name('welcome');




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//socialite laravel routes
Route::get('sign-in-google', [UserController::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserController::class, 'HandleProviderCallback'])->name('user.google.callback'); 



//HARUS LOGIN DULU KALO MAU MENGAKSES HALAMAN INI
Route::middleware(['auth'])->group(function(){
//page Chekout dan Chekout Succes jadi 1 controller 
Route::get('chekout/success', [ChekoutController::class, 'success'])->name('chekout.success');
Route::get('chekout/{camp:slug}', [ChekoutController::class, 'create'])->name('chekout.create');
Route::post('chekout/{camp}', [ChekoutController::class, 'store'])->name('chekout.store');


Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});


require __DIR__.'/auth.php';
