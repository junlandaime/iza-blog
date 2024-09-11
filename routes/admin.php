<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::resource('posts', PostController::class)->names('admin.posts');
Route::resource('categories', CategoryController::class)->names('admin.categories');
Route::resource('comments', CommentController::class)->only(['index', 'destroy'])->names('admin.comments');
Route::resource('testimonials', TestimonialController::class)->names('admin.testimonials');
Route::resource('users', UserController::class)->names('admin.users');

Route::patch('/comments/{comment}/approve', [CommentController::class, 'approve'])->name('admin.comments.approve');
Route::patch('/comments/{comment}/unapprove', [CommentController::class, 'unapprove'])->name('admin.comments.unapprove');
