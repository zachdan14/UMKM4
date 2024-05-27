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

Route::get('/backup', function () {
    return view('backup');
});

Route::controller(AdmuserController::class)->group(function(){
    Route::get('/admin', 'index')->name('admin.index');
    

    Route::get('/tampildata/admin', 'tampildata')->name('admin.tampildata');
    Route::get('/histori/admin', 'histori')->name('admin.histori');
    Route::get('/createakun/admin', 'createakun')->name('admin.createakun');
    Route::post('/save/admin', 'saveakun')->name('admin.saveakun');
    Route::get('/editakun/admin/{id}', 'editakun')->name('admin.editakun');
    Route::put('/updateakun/admin/{id}', 'updateakun')->name('admin.updateakun');
    Route::get('/softdeleteakun/admin/{id}', 'softdeleteakun')->name('admin.softdeleteakun');
    Route::put('/softdelete/admin/{id}','softdelete')->name('admin.softdelete');
    Route::get('/balikakun/admin/{id}', 'balikakun')->name('admin.balikakun');
    Route::put('/coveryakun/admin/{id}','coveryakun')->name('admin.coveryakun');
    Route::get('/detailakun/admin/{id}', 'detailakun')->name('admin.detailakun');
    Route::get('/deleteakun/admin/{id}', 'deleteakun')->name('admin.deleteakun');
    Route::get('/delete/admin/{id}', 'delete')->name('admin.delete');
    Route::get('/pesan/admin', 'pemesanan')->name('admin.pemesanan');
});
