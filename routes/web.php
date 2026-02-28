<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DocumentPageController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\CourseController as ControllersCourseController;
use App\Models\DocumentPage;
use App\Models\Testimonial;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('migrate', function () {
    Illuminate\Support\Facades\Artisan::call('migrate');
    return 'done';
});
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/testimonial', function () {
    return view('pages.testimonial');
})->name('testimonial');
Route::get('/courses', [ControllersCourseController::class, 'index'])->name('courses');
Route::get('/courses/{slug}', [ControllersCourseController::class, 'show'])->name('course.show');
Route::get('/blogs', [ControllersBlogController::class, 'index'])->name('blogs');
Route::get('/blogs/{slug}', [ControllersBlogController::class, 'show'])->name('blog.show');
Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');
Route::get('/testimonial', function () {
    $testimonials = Testimonial::where('status', true)->latest('id')->get();
    return view('pages.testimonial', compact('testimonials'));
})->name('testimonial');
Route::get('/terms', function () {
    $document = DocumentPage::where('page_type', 'terms_condition')
        ->where('status', true)
        ->first();
    return view('pages.terms', compact('document'));
})->name('terms');

Route::get('/privacy', function () {
    $document = DocumentPage::where('page_type', 'privacy_policy')
        ->where('status', true)
        ->first();
    return view('pages.privacy', compact('document'));
})->name('privacy');

Route::get('/disclaimer', function () {
    $document = DocumentPage::where('page_type', 'disclaimer')
        ->where('status', true)
        ->first();
    return view('pages.disclaimer', compact('document'));
})->name('disclaimer');

Route::get('/refund-policy', function () {
    $document = DocumentPage::where('page_type', 'refund')
        ->where('status', true)
        ->first();
    return view('pages.refund', compact('document'));
})->name('refund');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', fn() => redirect()->route('admin.dashboard'));
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('courses', CourseController::class)->except(['show']);
        Route::resource('testimonials', TestimonialController::class)->except(['show']);
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