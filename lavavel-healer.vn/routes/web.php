<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminPostController_1;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\FeaturedImagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RoleController;
use App\Models\FeaturedImages;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class, 'show']);
Route::get('cart/show', [CartController::class, 'show']);
Route::get('cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('cart/remove/{rowId}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('cart/destroy', [CartController::class, 'destroy'])->name('cart.destroy');
Route::post('cart/update', [CartController::class, 'update'])->name('cart.update');



#Quan lý bài viết trong admin

// Route::get('admin/post/add', function () {
//     return "Admin: Thêm bài viết";
// });

// Route::get('admin/post/update/{id}', function ($id) {
//     return "Admin: Cập nhật bài viết có id {$id}";
// });

// Route::get('admin/post/show', function () {
//     return "Admin: Hiển thị danh sách bài viết";
// });

// Route::get('admin/post/delete/{id}', function ($id) {
//     return "Admin: Xóa bài viết có id {$id}";
// });













//Định tuyến cơ bản

// Route::get('post', function () {
//     return "Đây là trang bài viết";
// });

// Route::get('admin/product', function () {
//     return "Trang quản lý sản phẩm ";
// });


// Route::get('admin/product/add', function () {
//     return "Trang thêm sản phẩm ";
// });


// // Định tuyến có tham số
// Route::get('posts/{id}', function ($id) {
//     return $id;
// });

// Route::get('posts/{cat_id}/page/{page}', function ($cat_id, $page) {
//     return $cat_id . '-' . $page;
// });


// //Đặt tên định tuyến
// Route::get('users/profile', function () {
//     return route('profile');
// })->name('profile');


// Route::get('admin/product/add', function () {
//     return route('product.add');
// })->name('product.add');


//Định tuyến có tham số tùy chọn
// domain.com/users => Hiển thị ra dnah sách users
// domain.com/users/4 => Hiển thị ra thông tin của người dùng có id = 4

// Route::get('users/{id?}', function ($id = 0) {
//     return $id;
// });


// //Định tuyến với tham cố có ràng buộc biểu thức chính quy


// Route::get('product/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');


// Route::get('product/{slug}/{id}', function ($slug, $id) {
//     return $id . '---' . $slug;
// })->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-_]+']);


//Định tuyến qua một view
// Route::view('/welcome', 'welcome');

// Route::view('/post', 'post', ['id' => 20]);


//Định tuyến qua controller
// Route::get('/post/{id}', [PostController::class, 'detail']);

// Route::get('product/show/{id}', [ProductController::class, 'show']);
// Route::get('product/create', [ProductController::class, 'create']);
// Route::get('product/update/{id}', [ProductController::class, 'update']);


// Route::resource('post', PostController::class);
// Route::resource('post', AdminPostController::class);
// Route::get('post/index', [PostController::class, 'index']);

// Route::get('admin/post/show', [AdminPostController_1::class, 'show']);

// Route::get('post/add', [AdminPostController_1::class, 'add']);

// Route::get('child', function () {
//     return view('child', ['data' => "5", 'post_title' => "Khóa học Laravel Pro - Healer.vn"]);
// });


// Route::get('demo', function () {
//     $users = array(
//         1 => array(
//             'name' => 'Nguyễn Thế Hiệu',
//         ),
//         2 => array(
//             'name' => 'Nguyễn Thị Hải Yến',
//         ),
//         3 => array(
//             'name' => 'Phạm Việt Anh',
//         ),
//     );
//     return view('demo', compact('users'));
// });

// Route::get('users/insert', function () {
//     DB::table('users')->insert(
//         ['name' => 'Nguyễn Thị Hải Yến', 'email' => 'haiyen@gmail.com', 'password' => bcrypt('admin')]
//     );
// });



// Route::get('posts/add', [PostController::class, 'add']);
// Route::get('posts/show', [PostController::class, 'show']);
// Route::get('posts/update/{id}', [PostController::class, 'update']);
// Route::get('posts/delete/{id}', [PostController::class, 'delete']);


// Route::get('admin/product/add', [AdminProductController::class, 'add']);
// Route::get('admin/product/show', [AdminProductController::class, 'show']);
// Route::get('admin/product/update/{id}', [AdminProductController::class, 'update']);
// Route::get('admin/product/delete/{id}', [AdminProductController::class, 'delete']);



// ELOQUENT ORM


// Route::get('posts/read', function () {
//     $posts = Post::all();
//     return $posts;
// });


// Route::get('posts/read', [PostController::class, 'read']);


// Route::get('posts/restore/{id}', [PostController::class, 'restore']);


// Route::get('posts/permanentlyDelete/{id}', [PostController::class, 'permanentlyDelete']);


// Route::get('images/read', [FeaturedImagesController::class, 'read']);

// Route::get('role/show', [RoleController::class, 'show']);


#FORM

// Route::get('posts/add', [PostController::class, 'add']);
