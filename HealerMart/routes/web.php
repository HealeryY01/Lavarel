<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'show'])->middleware('auth');

Route::get('/admin', [DashboardController::class, 'show']);

Route::get('admin/user/list', [AdminUserController::class, 'list']);

Route::get('admin/user/add', [AdminUserController::class, 'add']);

Route::post('admin/user/store', [AdminUserController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show']);

    Route::get('/admin', [DashboardController::class, 'show']);

    Route::get('admin/user/list', [AdminUserController::class, 'list']);

    Route::get('admin/user/add', [AdminUserController::class, 'add']);

    Route::post('admin/user/store', [AdminUserController::class, 'store']);
    Route::get('admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('delete_user');
});
