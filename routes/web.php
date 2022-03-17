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
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/master_barang', function () {
    return view('master_barang');
});
Route::get('/barang_masuk', function () {
    return view('barang_masuk');
});
Route::get('/berita_acara', function () {
    return view('berita_acara');
});
Route::get('bon_barang', function () {
    return view('bon_barang');
});
Route::get('laporan', function () {
    return view('laporan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/','Admin\AdminController@index');
});