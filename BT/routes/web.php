<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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


Route::get('post/add', [PostController::class, 'add']);


Route::post('post/store', [PostController::class, 'store']);

Route::get('post/show', [PostController::class, 'show'])->name('post.show');

Route::get('user/reg', function () {
    return view('user/reg');
});
