<?php
use App\Http\Controllers\PegawaiController;

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/pegawai', [PegawaiController::class, 'store']);
Route::get('/pegawai/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/{id}/edit', [PegawaiController::class, 'edit']);
Route::post('/pegawai/{id}/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/{id}/delete', [PegawaiController::class, 'destroy']);
Route::resource('/pegawai', PegawaiController::class);

use App\Http\Controllers\PelangganController;

Route::resource('pelanggan', PelangganController::class);
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
use App\Http\Controllers\AntrianController;

Route::get('/antrian', [AntrianController::class, 'index']);
Route::post('/antrian', [AntrianController::class, 'store'])->name('antrian.store');

Route::get('/antrian/edit/{id}', [AntrianController::class, 'edit'])->name('antrian.edit');
Route::post('/antrian/update/{id}', [AntrianController::class, 'update'])->name('antrian.update');
Route::delete('/antrian/delete/{id}', [AntrianController::class, 'destroy'])->name('antrian.destroy');