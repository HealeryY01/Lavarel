<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;
use App\Http\Controllers\AdminController;
use NunoMaduro\Collision\Adapters\Phpunit\Subscribers\Subscriber;
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

// Route::get('admin/{age}', [AdminController::class, 'index']);
// Route::get('admin/show/{age}', [AdminController::class, 'show']);

// - Admintrator => admin/dashboard
// - Subscriber => /

// users => Auth
// roles => id ,name

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('CheckRole:subcriber');
