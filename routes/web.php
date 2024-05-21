<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatacustomerController;

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

