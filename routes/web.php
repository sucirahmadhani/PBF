<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function () {
    return redirect('/admin');
})->name('login');


Route::get('/admin', function () {
    return view('dashboard');
});

Route::get('/admininbox', function () {
    return view('adm_inbox');
});

Route::get('/adminoutbox', function () {
    return view('adm_outbox');
});

Route::get('/detailsurat', function () {
    return view('detail');
});

Route::get('/editinbox', function () {
    return view('adm_edit_inbox');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/daftarpengajuan', function () {
    return view('adm_daftar_pengajuan');
});

Route::get('/statuspengajuan', function () {
    return view('adm_status_pengajuan');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/kepala', function () {
    return view('head');
});

