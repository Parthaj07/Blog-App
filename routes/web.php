<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login']);

Route::get('admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register');
Route::post('admin/register', [AdminController::class, 'register']);

Route::middleware('auth')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');







Route::post('admin/check-email', [AdminController::class, 'checkEmail'])->name('admin.checkEmail');
