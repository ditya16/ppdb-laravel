<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PPDBController::class,'index1']);
Route::get('/loginsiswa', [\App\Http\Controllers\PPDBController::class,'loginsiswa']);
Route::get('/index', [\App\Http\Controllers\PPDBController::class,'index'])->name('ppdb.index');
Route::post('/index', [\App\Http\Controllers\PPDBController::class,'store'])->name('ppdb.store');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/datasiswa', [\App\Http\Controllers\CalonsiswaController::class,'index']);
    Route::get('/biodata', [\App\Http\Controllers\BiodataController::class,'index']);
    Route::post('/biodata/{users}', [\App\Http\Controllers\BiodataController::class,'store']);
    Route::put('/biodata/{users}', [\App\Http\Controllers\BiodataController::class,'update']);
    Route::get('/dataortu', [\App\Http\Controllers\DataortuController::class,'index']);
    Route::post('/dataortu/{users}', [\App\Http\Controllers\DataortuController::class,'store']);
    Route::put('/dataortu/{users}', [\App\Http\Controllers\DataortuController::class,'update']);
    Route::get('/datapendukung', [\App\Http\Controllers\DatapendukungController::class,'index']);
    Route::post('/datapendukung/{users}', [\App\Http\Controllers\DatapendukungController::class,'store']);
    Route::put('/datapendukung/{users}', [\App\Http\Controllers\DatapendukungController::class,'update']);
    Route::get('/cetak/{users}',[\App\Http\Controllers\DashboardController::class,'cetak']);

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index']);
    Route::get('/excel',  [\App\Http\Controllers\PendaftarController::class,'excel']);
    Route::get('/pendaftar', [\App\Http\Controllers\PendaftarController::class,'index']);
    Route::get('/laporan', [\App\Http\Controllers\PendaftarController::class,'laporan']);
    Route::get('/akun', [\App\Http\Controllers\PendaftarController::class,'akun']);
    Route::get('/tambahakun', [\App\Http\Controllers\PendaftarController::class,'tambahakun']);
    Route::post('/tambahakun', [\App\Http\Controllers\PendaftarController::class,'store'])->name('pendaftar.store');
    Route::get('/hapusakun/{id}', [App\Http\Controllers\PendaftarController::class,'hapusakun']);
    Route::get('/hapus/{users}', [App\Http\Controllers\PendaftarController::class,'hapus']);
    Route::get('/lihat/{users}', [\App\Http\Controllers\PendaftarController::class,'lihat']);
    Route::get('/profil', [\App\Http\Controllers\ProfilController::class,'index']);
    Route::put('/profil/{users}', [\App\Http\Controllers\ProfilController::class,'update']);
    Route::get('/infosekolah',  [\App\Http\Controllers\InfoController::class,'infosekolah']);
    Route::post('/infosekolah/{users}',  [\App\Http\Controllers\InfoController::class,'storesekolah']);
    Route::put('/infosekolah/{users}',  [\App\Http\Controllers\InfoController::class,'updatesekolah']);
    Route::post('/ubahpassword', [\App\Http\Controllers\ChangePasswordController::class,'store']);


});

Auth::routes();

