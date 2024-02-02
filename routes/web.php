<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Auth\logincontroller;


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

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admin')->group(function () {
// });


Route::prefix('admin')->group(function () {
     Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/login', [logincontroller::class, 'index'])->name('admin.auth.login');

});



