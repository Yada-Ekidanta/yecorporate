<?php

use Illuminate\Support\Facades\Route;
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
        Route::get('agile-development',[MainController::class, 'ad'])->name('ad');
        Route::get('project-based',[MainController::class, 'pb'])->name('pb');
        Route::get('managed-services',[MainController::class, 'ms'])->name('ms');
        Route::get('design-services',[MainController::class, 'ds'])->name('ds');
        Route::get('technical-writer',[MainController::class, 'tw'])->name('tw');
        Route::get('quality-assurance',[MainController::class, 'qa'])->name('qa');
        Route::get('career',[MainController::class, 'career'])->name('career');
        Route::get('blog',[MainController::class, 'blog'])->name('blog');
        Route::get('blog/{slug}',[MainController::class, 'show_blog'])->name('show_blog');
        Route::get('case-study',[MainController::class, 'case_study'])->name('case_study');
        Route::get('contact',[MainController::class, 'contact'])->name('contact');
        Route::post('newsletter',[MainController::class, 'newsletter'])->name('newsletter');
        Route::post('send-message',[MainController::class, 'send_message'])->name('send_message');
    });
});