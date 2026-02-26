<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DocumentPageController;
use App\Http\Controllers\Admin\FaqController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');
Route::get('/testimonial',function(){
    return view('pages.testimonial');
})->name('testimonial');
Route::get('/blogs',function(){
    return view('pages.blogs');
})->name('blogs');
Route::get('/blog-details',function(){
    return view('pages.blog-details');
})->name('blog-details');
Route::get('/terms',function(){
    return view('pages.terms');
})->name('terms');
Route::get('/privacy',function(){
    return view('pages.privacy');
})->name('privacy');
Route::get('/faq',function(){
    return view('pages.faq');
})->name('faq');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', fn () => redirect()->route('admin.dashboard'));
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('courses', CourseController::class)->except(['show']);
        Route::resource('blogs', BlogController::class)->except(['show']);
        Route::resource('faqs', FaqController::class)->except(['show']);
        Route::get('documents', [DocumentPageController::class, 'index'])->name('documents.index');
        Route::get('documents/create/{pageType}', [DocumentPageController::class, 'create'])->name('documents.create');
        Route::post('documents', [DocumentPageController::class, 'store'])->name('documents.store');
        Route::get('documents/{document}/edit', [DocumentPageController::class, 'edit'])->name('documents.edit');
        Route::put('documents/{document}', [DocumentPageController::class, 'update'])->name('documents.update');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});