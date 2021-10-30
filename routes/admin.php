<?php



// Admin Route
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
    Route::namespace('Auth')->middleware('guest:admin')->group(function (){
        //login route
        Route::get('/login',[AuthenticatedSessionController::class,'create'])->name('login');
        Route::post('/login',[AuthenticatedSessionController::class,'store'])->name('adminLogin');
    });
    Route::middleware('admin')->group(function (){
        Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    });
    Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])->name('logout');

});
