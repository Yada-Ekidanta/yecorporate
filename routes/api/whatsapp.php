<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\WhatsappController;
Route::group(['domain' => ''], function() {
    Route::prefix('wa')->name('wa.')->group(function(){
        Route::get('',[WhatsappController::class, 'index'])->name('index');
        Route::get('callback',[WhatsappController::class, 'callback'])->name('callback');
    });
});