<?php

use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\SessionController;

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

Route::get('helper/url', [HelperController::class, 'url']);

Route::get('helper/string', [HelperController::class, 'string']);

Route::get('user/reg', function () {
    return view('user/reg');
});


Route::get('session/add', [SessionController::class, 'add']);

Route::get('session/show', [SessionController::class, 'show']);

Route::get('session/add_flash', [SessionController::class, 'add_flash']);

Route::get('session/delete', [SessionController::class, 'delete']);

Route::get('cookie/set', [CookieController::class, 'set']);
Route::get('cookie/get', [CookieController::class, 'get']);
