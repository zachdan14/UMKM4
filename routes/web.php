<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatacustomerController;
use App\Http\Controllers\AdmuserController;
use App\Http\Controllers\navbarController;
use App\Http\Controllers\LoginController;

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



// Route::post('/datacustomer/kirim','store', function () {
//     return view('datacustomer.store');
// });
// Route::get('/layout.home', function () {
//     return view('layout.home');
// });

Route::controller(DatacustomerController::class)->group(function(){
    Route::get('/datacustomer','index')->name('datacustomer.index');
    Route::post('/datacustomer/kirim','store')->name('datacustomer.store');
    Route::get('/form','indexForm')->name('form.index');
});

// {{-- login (willy thing) --}}
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login.proses');
// {{-- register (willy thing) --}}
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register.proses');
// log out
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// biar saat login auto ke halaman masing-masing
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home'); // admin
    })->name('admin.home');
    Route::get('/home', function () {
        return view('home'); // user
    })->name('home');
});
Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::post('/admin/user/{id}/deactivate', [LoginController::class, 'deactivateUser'])->name('admin.user.deactivate');
    Route::post('/admin/user/{id}/activate', [LoginController::class, 'activateUser'])->name('admin.user.activate');
});
// ^^^willy thing^^^

Route::controller(AdmuserController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin.index');
    

    Route::get('/tampildata/admin', 'tampildata')->name('admin.tampildata');
    Route::get('/histori/admin', 'histori')->name('admin.histori');
    Route::get('/createakun/admin', 'createakun')->name('admin.createakun');
    Route::post('/save/admin', 'saveakun')->name('admin.saveakun');
    Route::get('/editakun/admin/{id}', 'editakun')->name('admin.editakun');
    Route::put('/updateakun/admin/{id}', 'updateakun')->name('admin.updateakun');
    Route::get('/hapusakun/admin/{id}', 'hapusakun')->name('admin.hapusakun');
    Route::put('/softdelete/admin/{id}','softdelete')->name('admin.softdelete');
    Route::get('/pesan/admin', 'pemesanan')->name('admin.pemesanan');
});

// Route::get('/welcomepageee', function () {
//     return view('welcomepageee');
// });

Route::resource('/welcomepageee', navbarController::class);
