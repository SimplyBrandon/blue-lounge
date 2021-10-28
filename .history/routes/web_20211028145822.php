<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Staff\DashboardController;

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
})->name('welcome');



Route::name('staff.')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'renderDashboard'])->name('dashboard');
    Route::get('/my-rota', [DashboardController::class, 'renderMyRota'])->name('my-rota');

    // Management Routes
    Route::get('/staff-rota', [DashboardController::class, 'renderStaffRota'])->name('staff-rota');
    Route::get('/staff', [DashboardController::class, 'renderStaffList'])->name('staff-list');
    Route::get('/management', [DashboardController::class, 'renderDashboard'])->name('staff-dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/my-rota', function(){
    return view('staff.myrota');
})->middleware(['auth'])->name('my-rota');

require __DIR__.'/auth.php';
