<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontendController::class, 'index'])->name('home');

Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact_us');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about_us');
Route::get('/services', [FrontendController::class, 'services'])->name('services');

// Route::get('/about-us', function () {
//     return view('about_us');
// })->name('about_us');

// Route::get('/services', function () {
//     return view('service');
// })->name('services');


Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');

Route::post('mail_sent', [HomeController::class, 'formSubmit'])->name('submitForm');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
