<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}', function ($name) {
    return view('user', ['nama_lengkap' => $name]);
});

Route::get('/books', [BookController::class, "index"])->name("books.index");
Route::get('/books/create', [BookController::class, "create"])->name("books.create");
Route::post('/books/store', [BookController::class, "store"])->name("books.store");

Route::get('/authors/{author}', [AuthorController::class, "show"])->name("authors.show");