<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\UploadController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\PageController as UserPage;

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
    Route::get('/shop/{category}', 'shop')->name('shop');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/cart-review', 'cartReview')->name('cart.review');
    Route::get('/checkout', 'checkout')->name('checkout');
});

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callback');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [UserPage::class, 'dashboard'])->name('dashboard');
    
    Route::group(['prefix' => 'dashboard'], function() {
        Route::controller(UserPage::class)->group(function() {
            Route::get('faq', 'faq')->name('faq');
            Route::get('feed', 'feed')->name('feed');
            Route::get('review', 'review')->name('review');
            Route::get('settings', 'settings')->name('settings');
        });

        Route::controller(ShopController::class)->group(function() {
            Route::get('category', 'category')->name('category');
            Route::get('product', 'product')->name('product');
        });

        Route::controller(OrderController::class)->group(function() {
            Route::get('orders', 'index')->name('orders');
        });
    });
});

Route::get('/dashboard-mini', function () {
    return view('dashboard');
})->name('dashboard.mini');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
