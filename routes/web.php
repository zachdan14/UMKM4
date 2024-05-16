<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmuserController;

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
