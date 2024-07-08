<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Postcontroller;
use function Symfony\Component\String\b;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('/book', [BookController::class, 'index'])->middleware('auth');
Route::get('book/tambah', [BookController::class, 'create']);
Route::post('book/simpan', [BookController::class, 'simpan']);
Route::get('book/{id}/edit', [BookController::class, 'show']);
Route::post('book/{id}/update', [BookController::class, 'update']);
Route::get('book/{id}/hapus', [BookController::class, 'destroy']);

Route::get('/about', [AboutController::class, 'index'])->middleware('auth');

Route::get('/posts', [Postcontroller::class, 'index'])->middleware('auth');
Route::get('/posts/{id}/post', [Postcontroller::class, 'show']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->middleware('auth');
Route::get('mahasiswa/tambah', [MahasiswaController::class, 'create']);
Route::post('mahasiswa/simpan', [MahasiswaController::class, 'simpan']);
Route::get('mahasiswa/{id}/edit', [MahasiswaController::class, 'show']);
Route::post('mahasiswa/{id}/update', [MahasiswaController::class, 'update']);
Route::get('mahasiswa/{id}/hapus', [MahasiswaController::class, 'destroy']);

Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
