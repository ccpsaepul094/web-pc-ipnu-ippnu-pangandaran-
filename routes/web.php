<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [CompanyController::class, "index"])->name('company.home');
    Route::get('/history', [CompanyController::class, "history"])->name('company.history');
     Route::get('/berita/{slug}', [BeritaController::class, 'show'])
        ->name('berita.show');
});


//ini perberitaan

// route untuk admin
Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');
    //user managemet
    Route::get('/usermanagement', [AdminController::class, 'management'])->name('users.management');
    //kelola artikel
    Route::get('/articlemanagement', [AdminController::class, 'articlemanagement'])->name('article.management');
});



// route untuk user
Route::middleware(['role:user'])->group(function () {
    Route::get('/user/blog', [BeritaController::class, 'index']);
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    //tambah berita
    Route::post('/beritas', [BeritaController::class, 'store'])->name('berita.store');
    // edit
    Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    //hapus
    Route::delete('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
    //lihat berita


});

//menghapus user




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
