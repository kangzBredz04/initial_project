<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return "Respon ini diterima dari path / dengan metode GET";
});

Route::get('/books', function () {
    return "Router ini nantinya akan digunakan untuk mengambil semua data buku";
});

Route::post('/books', function () {
    return "Router ini nantinya akan digunakan untuk mencipatakan data buku yang baru";
});

Route::put('/books', function () {
    return "Router ini nantinya akan digunakan untuk mengubah data buku";
});

Route::delete('/books', function () {
    return "Router ini nnantinya digunakan untuk menghapus data buku";
});