<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {
    return view('user', ['nama_lengkap' => $name]);
});

Route::get('/books', [BookController::class, "index"]);
Route::get('/books/store', [BookController::class, "store"]);
