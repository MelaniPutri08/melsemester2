<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $data = [
        'nama' => 'Melani Putri Banowati',
        'nim' => '0110123043',
        'program_studi' => 'Sistem Informasi',
        'tahun_angkatan' => '2023',
    ];
    return view('about', $data);
});
