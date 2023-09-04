<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\P2hController;
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


// p2h cek form
Route::prefix('p2h-cek')->group(function () {
    Route::get('/', [P2hController::class, 'indexToday'])->name('p2h-cek.list');
    Route::get('/form/{id}/{nomor_lambung}', [P2hController::class, 'getForm']);
    Route::post('/form/{id}/{nomor_lambung}', [P2hController::class, 'save']);
});


// Public Authentication
Route::get('/masuk', [AuthController::class, 'login'])->name('login');
Route::get('/registrasi', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');
Route::post('/register', [AuthController::class, 'authRegister'])->name('auth.register');



Route::middleware(['admin'])->group(function () {

    // Auth
    Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Overview
    Route::prefix('admin/overview')->group(function () {
        Route::get('/', [DashboardController::class, 'overview'])->name('overview.list');
    });

    // Admin
    Route::prefix('admin/admin')->group(function () {
        Route::get('/', [AuthController::class, 'listAdmin'])->name('admin.list');
    });

    // User
    Route::prefix('admin/user')->group(function () {
        Route::get('/', [AuthController::class, 'listUser'])->name('user.list');
        Route::get('/download-csv', [AuthController::class, 'export'])->name('user.download.csv');
        Route::get('/tambah', [AuthController::class, 'addUser'])->name('user.add');
        Route::post('/simpan', [AuthController::class, 'storeUser'])->name('user.save');
        Route::get('/edit/{id}', [AuthController::class, 'editUser'])->name('edit.user');
        Route::post('/edit/{id}', [AuthController::class, 'updateUser']);
        Route::post('/update', [AuthController::class, 'updateUser']);
        Route::get('/hapus/{id}', [AuthController::class, 'deleteUser'])->name('user.delete');
    });

    // kendaraan / unit GA
    Route::prefix('admin/kendaraan')->group(function () {
        Route::get('/', [KendaraanController::class, 'show'])->name('kendaraan.list');
        Route::get('/download-csv', [KendaraanController::class, 'export'])->name('kendaraan.download.csv');
        Route::get('/tambah', [KendaraanController::class, 'add'])->name('kendaraan.add');
        Route::post('/simpan', [KendaraanController::class, 'save'])->name('kendaraan.save');
        Route::get('/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::post('/edit/{id}', [KendaraanController::class, 'update']);
        Route::get('/hapus/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });

    // p2h view
    Route::prefix('admin/p2h')->group(function () {
        Route::get('/', [P2hController::class, 'show'])->name('p2h.list.admin');
        Route::get('/download-csv', [P2hController::class, 'export'])->name('p2h.download.csv');
        Route::get('/detail/{id}', [P2hController::class, 'detail'])->name('p2h.detail');
        Route::get('/edit/{id}', [P2hController::class, 'getFormAdmin'])->name('p2h.edit');
        Route::post('/edit/{id}', [P2hController::class, 'update'])->name('p2h.update');
        Route::get('/hapus/{id}', [P2hController::class, 'delete'])->name('p2h.delete');
    });
});

Route::middleware(['user'])->group(function () {

    // Auth
    Route::get('/user/logout', [AuthController::class, 'logout'])->name('user.logout');

    // p2h view
    Route::prefix('user/p2h')->group(function () {
        Route::get('/', [P2hController::class, 'indexTodayUser'])->name('p2h.list');
        Route::get('/form/{id}/{nomor_lambung}', [P2hController::class, 'getFormUser']);
        Route::post('/form/{id}/{nomor_lambung}', [P2hController::class, 'saveUser']);
    });

    Route::get('/error-page', [P2hController::class, 'showErrorPage'])->name('error');
});
