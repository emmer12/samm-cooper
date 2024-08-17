<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services/{slug}', [PageController::class, 'show'])->name('service-details');
Route::get('/services/access-control-systems', [PageController::class, 'control'])->name('control');
Route::get('/services/perimeter-security-systems', [PageController::class, 'security'])->name('security');
Route::get('/services/fire-fighting-systems', [PageController::class, 'fighting'])->name('fighting');
Route::get('/services/emergency-response', [PageController::class, 'emergency'])->name('emergency');
Route::get('/services/scs-guards', [PageController::class, 'scs'])->name('scs');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
