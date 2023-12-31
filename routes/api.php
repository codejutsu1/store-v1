<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Api\V1\FaqController;
use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\FeedController;
use App\Http\Controllers\Api\V1\StaffController;
use App\Http\Controllers\Api\V1\ProductController;
use App\Http\Controllers\Api\V1\SettingController;
use App\Http\Controllers\Api\V1\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function() {
    Route::controller(AuthController::class)->group(function() {
        Route::post('login', 'login');
        Route::post('register', 'register');
    });

    Route::group(['middleware' => 'auth:sanctum'], function(){
        Route::post('logout', [AuthController::class, 'logout']);

        // Route::group(['middleware' => 'can:view shop'], function(){
        //     Route::apiResource('categories', CategoryController::class);
        // });

            //View shop middleware
            Route::apiResource('categories', CategoryController::class);
            Route::apiResource('products', ProductController::class);

            //View website middleware
            Route::apiResource('faqs', FaqController::class);
            Route::apiResource('feeds', FeedController::class);
            Route::apiResource('reviews', ReviewController::class);

            //view staff middleware
            Route::apiResource('staffs', StaffController::class);

            Route::controller(SettingController::class)->group(function() {
                //view settings
                Route::get('settings/site', 'site_index');
                Route::put('settings/site-update', 'site_update');

                Route::get('settings/socials', 'social_index');
                Route::put('settings/socials-update', 'social_update');

                Route::put('settings/change-password', 'change_password');
            });
    });
});