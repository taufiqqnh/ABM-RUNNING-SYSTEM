<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Landing Page
Route::get('/', function () {
    return view('landingpage.home');
});


//Landing Page

// ADMIN
Route::get('/dashboard/home/checkSlug', [HomeController::class, 'checkSlug']) ->middleware('auth');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::resource('/admin/home', HomeController::class);
    Route::resource('/admin/activity', ActivityController::class);
    Route::resource('/admin/contactus', ContactusController::class);
});
// ADMIN


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
