<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Admin Route
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


