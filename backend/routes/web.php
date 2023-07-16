<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\DashboardController;

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


Route::get('/user', function () {
   return view('welcome');
});


Route::get('/buku', function () {
    return view('buku');
});


Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/tambahbuku', function () {
    return view('welcome');
});

Route::get('/daftarbuku', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('welcome');
});

Route::get('/loginuser', function () {
    return view('welcome');
});


