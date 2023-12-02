<?php

use App\Http\Controllers\Admin\AdminAuthenticateController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Instructor\InstructorController;
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

Route::get('dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('admin')->group(function (){
    Route::controller(AdminAuthenticateController::class)->group(function (){
             Route::get('login', 'login')->name('admin.auth.login');
    });

    Route::controller(AdminController::class)->middleware(['auth', 'role:admin'])->group(function (){
        Route::get('dashboard', 'dashboard')->name('admin.view.dashboard');
        Route::get('logout', 'logout')->name('admin.logout');
    });
});
Route::middleware(['auth', 'role:instructor'])->group(function (){
    Route::controller(InstructorController::class)->prefix('instructor')->group(function (){
        Route::get('dashboard', 'dashboard')->name('instructor.view.dashboard');
    });
});

