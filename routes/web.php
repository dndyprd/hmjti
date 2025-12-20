<?php
 
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog-details');

// view route standar 
Route::view('/after-event', 'after-event')->name('after-event');

