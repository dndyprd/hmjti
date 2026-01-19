<?php
 
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CalendarController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:20,1')->group(function () {
    Route::get('/', [WelcomeController::class, 'index'])->name('welcome');  
    Route::get('/blogs', [BlogController::class, 'index'])->name('blog-all'); 
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog-details');

    Route::get('blog.after_event', function () {
        return view('after-event');
    })->name('after-event');

    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
});