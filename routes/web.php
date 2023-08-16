<?php

use App\Mail\OrderReceived;
use App\Mail\OrderDelivered;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\User\ShopController;
use App\Http\Controllers\User\OrderController;
use App\Http\Controllers\User\StaffController;
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

Route::get('/main', function () {
    Mail::to('codejutsu@protonmail.com')->send(new OrderReceived());
    Mail::to('codejutsu@protonmail.com')->send(new OrderDelivered());
});

Route::controller(PageController::class)->group(function() {
    Route::get('/', 'home')->name('home');
    Route::get('about-us', 'aboutUs')->name('about.us');
    Route::get('privacy-policy', 'privacyPolicy')->name('privacy.policy');
    Route::get('terms-and-conditon', 'terms')->name('terms');
    Route::get('shop/{category}', 'shop')->name('shop');
    Route::get('product/{product}', 'productShow')->name('product.show');
    Route::get('cart', 'cart')->name('cart');
    Route::get('cart-review', 'cartReview')->name('cart.review');
    Route::get('checkout', 'checkout')->name('checkout');
});

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback'])->name('callback');

Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard', [UserPage::class, 'dashboard'])->name('dashboard');
    
    Route::group(['prefix' => 'dashboard'], function() {
        Route::controller(UserPage::class)->middleware('can:view website')->group(function() {
            Route::get('faq', 'faq')->name('faq');
            Route::get('feed', 'feed')->name('feed');
            Route::get('review', 'review')->name('review');
        });

        Route::controller(StaffController::class)->middleware('can:view staff')->group(function() {
            Route::get('staff', 'index')->name('staff');
            Route::get('staff/{staff}', 'show')->name('staff.show');
        });

        Route::get('settings', [UserPage::class, 'settings'])->name('settings');

        Route::controller(ShopController::class)->middleware('can:view shop')->group(function() {
            Route::get('category', 'category')->name('category');
            Route::get('product', 'product')->name('product');
        });

        Route::controller(OrderController::class)->group(function() {
            Route::get('orders', 'index')->name('orders');
            Route::get('orders/{order}', 'show')->name('orders.show');
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
