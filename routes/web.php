<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('blog.show');
Route::get('/blog/search', [PostController::class, 'search'])->name('blog.search');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category:slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

        Route::resource('posts', AdminPostController::class)->names('admin.posts');
        Route::resource('categories', AdminCategoryController::class)->names('admin.categories');
        Route::resource('comments', AdminCommentController::class)->names('admin.comments');
        Route::resource('testimonials', AdminTestimonialController::class)->names('admin.testimonials');
        Route::resource('users', UserController::class)->names('admin.users');

        Route::patch('/comments/{comment}/approve', [AdminCommentController::class, 'approve'])->name('admin.comments.approve');
        Route::patch('/comments/{comment}/approve', [AdminCommentController::class, 'approve'])->name('admin.comments.approve');
        Route::patch('/comments/{comment}/unapprove', [AdminCommentController::class, 'unapprove'])->name('admin.comments.unapprove');

        Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.settings.index');
        Route::put('/admin/settings', [SettingController::class, 'update'])->name('admin.settings.update');
    });
});


// Auth routes (if using Laravel Breeze)
require __DIR__ . '/auth.php';

// Admin routes
// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
//     require __DIR__ . '/admin.php';
// });
