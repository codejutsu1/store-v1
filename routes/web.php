<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Page\PageController;

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


Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('/about-us', 'aboutUs')->name('about.us');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy.policy');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/cart-review', 'cartReview')->name('cart.review');
    Route::get('/checkout', 'checkout')->name('checkout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard-mini', function () {
    return view('user.dashboard');
})->name('dashboard.mini');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
