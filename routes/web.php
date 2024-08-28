<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------Front Routes----------------------------------------------------------
*/
Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
});
/*
|--------------------------------Admin Routes----------------------------------------------------------
*/
Route::name('admin.')->prefix(LaravelLocalization::setLocale().'/admin')->middleware([ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ])->group(function () {
    Route::middleware('auth')->group(function () {
        Route::view('/', 'admin.index')->name('index');
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index','show','destroy']);
        });
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index','destroy']);
        });
        Route::controller(TestmonialController::class)->group(function () {
            Route::resource('testmonials', TestmonialController::class);
        });
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index','update']);
        });
    });

    require __DIR__.'/auth.php';
});


