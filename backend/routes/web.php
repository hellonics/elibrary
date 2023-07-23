<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\DashboardController;
use App\Http\Controllers\BukuController;

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
    return view('home.index');
});


Route::get('/user', function () {
    return view('welcome');
});




Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/buku/tambah', [BukuController::class, 'create']);
Route::post('/buku/store', [BukuController::class, 'store']);

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/user', function () {
    return view('welcome');
});

Route::get('/loginuser', function () {
    return view('welcome');
});
