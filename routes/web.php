<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kosmapusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', KosmapusController::class);
Route::get('/login', [KosmapusController::class, 'LoginForm'])->name('login.form'); // Untuk menampilkan form login
Route::post('/login', [KosmapusController::class, 'Login'])->name('login'); // Untuk memproses login
Route::get('daftar', [KosmapusController::class, 'daftar'])->name('daftar.form'); // menampilkan form daftar
Route::post('/daftar', [KosmapusController::class, 'daftarAkun'])->name('daftar.store'); // Proses daftar
Route::get('/user', [KosmapusController::class, 'user'])->name('user');
Route::get('/detail', [KosmapusController::class, 'detail'])->name('user.detail');
// Route untuk menampilkan form informasi
Route::get('/informasi', [KosmapusController::class, 'create'])->name('informasi.create');
// Route untuk menyimpan informasi
Route::post('/informasi', [KosmapusController::class, 'store'])->name('informasi.store');
Route::get('/koslokasi', [KosmapusController::class, 'koslokasi'])->name('koslokasi');
Route::get('/lupa', [KosmapusController::class, 'lupa'])->name('lupa');
Route::get('/pembayaran', [KosmapusController::class, 'pembayaran'])->name('pembayaran');
Route::get('/semuakos', [KosmapusController::class, 'semuakos'])->name('kos.semuakos');
Route::get('/tentang', [KosmapusController::class, 'tentang'])->name('tentang');
Route::post('/search', [KosmapusController::class, 'search'])->name('search');