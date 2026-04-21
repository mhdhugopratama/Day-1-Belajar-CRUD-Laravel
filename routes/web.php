<?php

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index']
);

Route::get('/tambah', [MahasiswaController::class, 'tambah']
);

Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'form']);

Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/hapus/{id}', [MahasiswaController::class, 'hapus']);

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);

Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);