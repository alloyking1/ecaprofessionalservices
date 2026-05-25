<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FormSubmissionController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function (): void {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/careers', 'careers')->name('careers');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/faq', 'faq')->name('faq');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(FormSubmissionController::class)->group(function (): void {
    Route::post('/contact', 'submitContact')->name('contact.submit');
    Route::post('/careers', 'submitCareer')->name('careers.submit');
});

Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function (): void {
    Route::get('/', 'index')->name('index');
    Route::get('/tax', 'tax')->name('tax');
    Route::get('/audit', 'audit')->name('audit');
    Route::get('/accounting', 'accounting')->name('accounting');
    Route::get('/payroll', 'payroll')->name('payroll');
    Route::get('/bookkeeping', 'bookkeeping')->name('bookkeeping');
    Route::get('/compliance', 'compliance')->name('compliance');
    Route::get('/advisory', 'advisory')->name('advisory');
    Route::get('/risk-management', 'riskManagement')->name('risk-management');
});
