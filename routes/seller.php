<?php


use App\Http\Controllers\Seller\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Seller\SellerHomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('Seller')->prefix('seller')->name('seller.')->group(function (){
    Route::namespace('Auth')->middleware('guest:seller')->group(function (){
        //login route
        Route::get('/login',[AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('/login',[AuthenticatedSessionController::class,'store'])->name('sellerLogin');
    });
    Route::middleware('seller')->group(function (){
        Route::get('/dashboard',[SellerHomeController::class,'index'])->name('dashboard');
    });
    Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

});
