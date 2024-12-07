<?php

use App\Http\Controllers\KeuanganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/keuangan-santri',[KeuanganController::class,'loadallsantri']);
Route::get('/add/santri',[KeuanganController::class,'loadaddsantriform']);

Route::post('/add/santri',[KeuanganController::class,'addsantri'])->name('addsantri');

Route::get('/edit/{id}',[KeuanganController::class,'Editsantrifrom']);
Route::get('/delete/{id}',[KeuanganController::class,'Hapussantrifrom']);

Route::post('/edit/santri',[KeuanganController::class,'Editsantri'])->name('Editsantri');