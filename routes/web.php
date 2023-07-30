<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\PortController;
use App\Http\Controllers\backend\StatusController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    # Admin Profile
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    # Admin
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    # Order
    Route::post('store', [OrderController::class, 'store'])->name('order.store');
    Route::get('destroy/{order}', [OrderController::class, 'destroy'])->name('order.destroy');

    # Port
    Route::post('set-current-port', [PortController::class, 'setCurrentPort'])->name('set.port');

    # Status
    Route::post('change-status', [StatusController::class, 'changeStatus'])->name('change.status');
});

require __DIR__.'/auth.php';
