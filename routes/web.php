<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('migrate',function(){
    Illuminate\Support\Facades\Artisan::call('migrate');
return 'done';
});
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
