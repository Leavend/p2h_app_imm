<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\P2hController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


// list p2h
Route::get('/', [P2hController::class, 'index'])->name('home');


Route::middleware(['guest'])->group(function () {

    // p2h cek form
    Route::prefix('p2h-cek')->group(function () {
        Route::get('/', [P2hController::class, 'indexToday'])->name('p2h-cek.list');
        Route::get('/form/{id}', [P2hController::class, 'getForm']);
        Route::post('/simpan', [P2hController::class, 'save']);
    });


    // Public Authentication
    Route::get('/masuk', [AuthController::class, 'login'])->name('login');
    Route::get('/registrasi', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'authRegister'])->name('auth.register');
});


Route::middleware(['admin'])->group(function () {

    // Auth
    Route::get('/logout', [AuthController::class, 'logout']);

    // Overview
    Route::prefix('overview')->group(function () {
        Route::get('/', [DashboardController::class, 'overview'])->name('overview.list');
    });

    // Admin
    Route::prefix('admin')->group(function () {
        Route::get('/', [AuthController::class, 'listAdmin'])->name('admin.list');
    });

    // User
    Route::prefix('user')->group(function () {
        Route::get('/', [AuthController::class, 'listUser'])->name('user.list');
        Route::get('/tambah', [AuthController::class, 'addUser'])->name('user.add');
        Route::post('/simpan', [AuthController::class, 'storeUser'])->name('user.save');
        Route::get('/edit/{id}', [AuthController::class, 'editUser'])->name('user.edit');
        Route::post('/perbarui/{id}', [AuthController::class, 'updateUser'])->name('user.update');
        Route::get('/hapus/{id}', [AuthController::class, 'deleteUser'])->name('user.delete');
    });

    // kendaraan / unit GA
    Route::prefix('kendaraan')->group(function () {
        Route::get('/', [KendaraanController::class, 'show'])->name('kendaraan.list');
        Route::get('/tambah', [KendaraanController::class, 'add'])->name('kendaraan.add');
        Route::post('/simpan', [KendaraanController::class, 'save'])->name('kendaraan.save');
        Route::get('/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::post('/perbarui/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::get('/hapus/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });

    // p2h view
    Route::prefix('p2h')->group(function () {
        Route::get('/', [P2hController::class, 'show'])->name('p2h.list.admin');
        Route::get('/detail/{id}', [P2hController::class, 'detail'])->name('p2h.detail');
        Route::get('/edit/{id}', [P2hController::class, 'edit'])->name('p2h.edit');
        Route::post('/perbarui/{id}', [P2hController::class, 'update'])->name('p2h.update');
    });
});

Route::middleware(['user'])->group(function () {

    // Auth
    Route::get('/logout', [AuthController::class, 'logout']);

    // p2h view
    Route::prefix('p2h')->group(function () {
        Route::get('/daftar', [P2hController::class, 'indexToday'])->name('p2h.list');
        Route::get('/form/{id}', [P2hController::class, 'getForm']);
        Route::post('/simpan', [P2hController::class, 'save']);
        Route::get('/detail/{id}', [P2hController::class, 'detail'])->name('p2h.detail');
        Route::get('/edit/{id}', [P2hController::class, 'edit'])->name('p2h.edit');
        Route::post('/perbarui/{id}', [P2hController::class, 'update'])->name('p2h.update');
    });
});
