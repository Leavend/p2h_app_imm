<?php

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

Route::middleware(['guest'])->group(function () {
    // list p2h
    Route::get('/', [P2hFormController::class, 'showAll']);
    Route::get('/', [P2hFormController::class, 'showToday']);
    Route::get('/', [P2hFormController::class, 'showMonts']);


    // p2h cek form
    Route::prefix('p2h-forms')->group(function () {
        Route::get('/daftar', [P2hFormController::class, 'show'])->name('p2h-forms.list');
        Route::post('/simpan', [P2hFormController::class, 'save'])->name('p2h-forms.save');
        Route::get('/edit/{id}', [P2hFormController::class, 'edit'])->name('p2h-forms.edit');
        Route::put('/perbarui/{id}', [P2hFormController::class, 'update'])->name('p2h-forms.update');
        Route::get('/detail/{id}', [P2hFormController::class, 'detail'])->name('p2h-forms.detail');
    });


    // Public Authentication
    Route::get('/masuk', [AuthController::class, 'login'])->name('login');
    Route::get('/registrasi', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'authLogin'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'authRegister'])->name('auth.register');
});


Route::middleware(['admin'])->group(function () {
    // Route::controller(OrderController::class)->group(function () {
    //     Route::get('/orders/{id}', 'show');
    //     Route::post('/orders', 'store');
    // });
    // Route::get('', [AdminController::class, 'login']);
    // Route::get('', [AdminController::class, 'login']);
    // Route::get('', [AdminController::class, 'login']);
    // Route::get('', [AdminController::class, 'login']);

    // kendaraan / unit GA
    Route::prefix('kendaraan')->group(function () {
        Route::get('/daftar', [KendaraanController::class, 'show'])->name('kendaraan.list');
        Route::post('/simpan', [KendaraanController::class, 'save'])->name('kendaraan.save');
        Route::get('/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
        Route::get('/perbarui/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
        Route::get('/detail/{id}', [KendaraanController::class, 'detail'])->name('kendaraan.detail');
        Route::get('/hapus/{id}', [KendaraanController::class, 'delete'])->name('kendaraan.delete');
    });
});

Route::middleware(['user'])->group(function () {
});
