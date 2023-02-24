<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\MainController;

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

Route::group(['domain' => ''], function() {
    Route::prefix('')->name('web.')->group(function(){
        Route::get('',[MainController::class, 'index'])->name('home');
        Route::get('about',[MainController::class, 'about'])->name('about');
        Route::get('services',[MainController::class, 'services'])->name('services');
        Route::get('services/agile-development',[MainController::class, 'ad'])->name('ad');
        Route::get('services/project-based',[MainController::class, 'pb'])->name('pb');
        Route::get('services/managed-services',[MainController::class, 'ms'])->name('ms');
        Route::get('services/design-services',[MainController::class, 'ds'])->name('ds');
        Route::get('services/technical-writer',[MainController::class, 'tw'])->name('tw');
        Route::get('services/quality-assurance',[MainController::class, 'qa'])->name('qa');
        Route::get('career',[MainController::class, 'career'])->name('career');
        Route::get('insights',[MainController::class, 'blog'])->name('insights');
        Route::get('insights/{insight:slug}',[MainController::class, 'show_blog'])->name('show_insights');
        Route::get('case-study',[MainController::class, 'case_study'])->name('case_study');
        Route::get('case-study/{portfolio:slug}',[MainController::class, 'show_portfolio'])->name('show_portfolio');
        Route::get('contact',[MainController::class, 'contact'])->name('contact');
        Route::post('subscribe',[MainController::class, 'subscribe'])->name('subscribe');
        Route::post('send-message',[MainController::class, 'send_message'])->name('send_message');

        Route::prefix('auth')->name('auth.')->group(function () {
            Route::get('', [AuthController::class, 'index'])->name('index');
            Route::get('register', [AuthController::class, 'register'])->name('register');
            Route::get('forgot', [AuthController::class, 'forgot'])->name('forgot');
            Route::post('do-login', [AuthController::class, 'do_login'])->name('dologin');
            Route::post('do-register', [AuthController::class, 'do_register'])->name('doregister');
            Route::post('do-forgot', [AuthController::class, 'do_forgot'])->name('doforgot');
            Route::post('do-reset', [AuthController::class, 'do_reset'])->name('doreset');
        });
        
        Route::get('clear-cache', function() {
            Artisan::call('cache:clear');
            return 'Cache cleared';
        });
        Route::get('storage-link', function() {
            Artisan::call('storage:link');
            return 'Storage Linked';
        });
    });
});