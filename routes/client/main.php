<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['domain' => 'https://client.yadaekidanta.com'], function() {
    Route::prefix('client')->name('client.')->group(function(){
        Route::prefix('auth')->name('auth.')->group(function(){
            Route::get('',[AuthController::class, 'index'])->name('index');
            Route::get('register',[AuthController::class, 'register'])->name('register');
            Route::get('forgot',[AuthController::class, 'forgot'])->name('forgot');
            Route::post('do-login',[AuthController::class, 'do_login'])->name('dologin');
            Route::post('do-register',[AuthController::class, 'do_register'])->name('doregister');
            Route::post('do-forgot',[AuthController::class, 'do_forgot'])->name('doforgot');
            Route::post('do-reset',[AuthController::class, 'do_reset'])->name('doreset');
        });
        Route::middleware(['auth:clients'])->group(function(){
            Route::prefix('dashboard')->name('dashboard.')->group(function(){
                Route::get('',[DashboardController::class, 'index'])->name('index');
            });
            Route::prefix('profile')->name('profile.')->group(function(){
                Route::get('',[ProfileController::class, 'index'])->name('index');
                Route::get('setting',[ProfileController::class, 'setting'])->name('setting');
                Route::get('security',[ProfileController::class, 'security'])->name('security');
                Route::get('activity',[ProfileController::class, 'activity'])->name('activity');
                Route::get('billing',[ProfileController::class, 'billing'])->name('billing');
                Route::get('statement',[ProfileController::class, 'statement'])->name('statement');
                Route::get('referral',[ProfileController::class, 'referral'])->name('referral');
                Route::get('apikey',[ProfileController::class, 'apikey'])->name('apikey');
                Route::get('log',[ProfileController::class, 'log'])->name('log');
            });
            Route::get('logout',[AuthController::class, 'do_logout'])->name('auth.logout');
        });
    });
});
