<?php

use App\Http\Controllers\ProfileController;
//karyawanController
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\quizController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//prefix quizzes, middleware auth
Route::middleware('auth')->prefix('quizzes')->group(function () {
    Route::get('/', [quizController::class, 'index'])->name('quizzes.index');
    Route::get('/create', [quizController::class, 'create'])->name('quizzes.create');
    Route::post('/', [quizController::class, 'store'])->name('quizzes.store');
    Route::get('/{quiz}/edit', [quizController::class, 'edit'])->name('quizzes.edit');
    Route::patch('/{quiz}', [quizController::class, 'update'])->name('quizzes.update');
    Route::delete('/{quiz}', [quizController::class, 'destroy'])->name('quizzes.destroy');
});

//prefix karayawans, middleware auth
Route::middleware('auth')->prefix('karyawans')->group(function () {
    Route::get('/banin', [karyawanController::class, 'index_banin'])->name('karyawans.banin.index');
    Route::get('/banat', [karyawanController::class, 'index_banat'])->name('karyawans.banat.index');
    Route::get('/create', [karyawanController::class, 'create'])->name('karyawans.create');
    Route::post('/', [karyawanController::class, 'store'])->name('karyawans.store');
    Route::get('/{karyawan}/edit', [karyawanController::class, 'edit'])->name('karyawans.edit');
    Route::patch('/{karyawan}', [karyawanController::class, 'update'])->name('karyawans.update');
    Route::delete('/{karyawan}', [karyawanController::class, 'destroy'])->name('karyawans.destroy');
});

require __DIR__.'/auth.php';
