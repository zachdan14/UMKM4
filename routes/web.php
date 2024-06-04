<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatacustomerController;
use App\Http\Controllers\AdmuserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\WelcomepageController;
use App\Http\Controllers\Beranda;

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


// zachdan
Route::get('/datacustomer', [DatacustomerController::class, 'index'])->name('datacustomer.index');
Route::get('/form', [DatacustomerController::class, 'indexForm'])->name('datacustomer.form');
Route::post('/datacustomer/store', [DatacustomerController::class, 'store'])->name('datacustomer.store');


// {{-- login (willy thing) --}}
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login.proses');
// {{-- register (willy thing) --}}
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register.proses');
// log out
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// biar saat login auto ke halaman masing-masing
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home'); // admin
    })->name('admin.home');
    Route::get('/home', function () {
        return view('dashboard.index'); // user
    })->name('home');
});
// ^^^willy thing^^^

// vania
Route::middleware(['auth', 'admin'])->controller(AdmuserController::class)->group(function(){
    route::get('/pemesanan', 'pemesanan')->name('admin.pemesanan');
    Route::get('/admin', 'index')->name('admin.index');
    Route::get('/tampildata/admin', 'tampildata')->name('admin.tampildata');
    Route::get('/histori/admin', 'histori')->name('admin.histori');
    Route::get('/createakun/admin', 'createakun')->name('admin.createakun');
    Route::post('/save/admin', 'saveakun')->name('admin.saveakun');
    Route::get('/editakun/admin/{id}', 'editakun')->name('admin.editakun');
    Route::put('/updateakun/admin/{id}', 'updateakun')->name('admin.updateakun');
    Route::get('/softdeleteakun/admin/{id}', 'softdeleteakun')->name('admin.softdeleteakun');
    Route::put('/softdelete/admin/{id}', 'softdelete')->name('admin.softdelete');
    Route::get('/balikakun/admin/{id}', 'balikakun')->name('admin.balikakun');
    Route::put('/coveryakun/admin/{id}', 'coveryakun')->name('admin.coveryakun');
    Route::get('/detailakun/admin/{id}', 'detailakun')->name('admin.detailakun');
    Route::get('/deleteakun/admin/{id}', 'deleteakun')->name('admin.deleteakun');
    Route::get('/delete/admin/{id}', 'delete')->name('admin.delete');
    Route::get('/tampiladmin/admin', 'tampiladmin')->name('admin.tampiladmin');// routes/web.php
   
});

// pasya

    Route::get('/welcomepage', [WelcomepageController::class, 'index'])->name('welcomepage');
    Route::get('/admin/tampiladmin', [Beranda::class, 'showUploadForm'])->name('admin.showUploadForm');
    Route::get('/admin/tampiladmin', [Beranda::class, 'tampiladmin'])->name('admin.tampiladmin');
   
    
    