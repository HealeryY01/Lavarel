<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


#Quan lý bài viết trong admin

Route::get('admin/post/add', function () {
    return "Admin: Thêm bài viết";
});

Route::get('admin/post/update/{id}', function ($id) {
    return "Admin: Cập nhật bài viết có id {$id}";
});

Route::get('admin/post/show', function () {
    return "Admin: Hiển thị danh sách bài viết";
});

Route::get('admin/post/delete/{id}', function ($id) {
    return "Admin: Xóa bài viết có id {$id}";
});













//Định tuyến cơ bản

Route::get('post', function () {
    return "Đây là trang bài viết";
});

Route::get('admin/product', function () {
    return "Trang quản lý sản phẩm ";
});


Route::get('admin/product/add', function () {
    return "Trang thêm sản phẩm ";
});


// Định tuyến có tham số 
Route::get('posts/{id}', function ($id) {
    return $id;
});

Route::get('posts/{cat_id}/page/{page}', function ($cat_id, $page) {
    return $cat_id . '-' . $page;
});


//Đặt tên định tuyến 
Route::get('users/profile', function () {
    return route('profile');
})->name('profile');


Route::get('admin/product/add', function () {
    return route('product.add');
})->name('product.add');


//Định tuyến có tham số tùy chọn 
// domain.com/users => Hiển thị ra dnah sách users
// domain.com/users/4 => Hiển thị ra thông tin của người dùng có id = 4

Route::get('users/{id?}', function ($id = 0) {
    return $id;
});


//Định tuyến với tham cố có ràng buộc biểu thức chính quy


Route::get('product/{id}', function ($id) {
    return $id;
})->where('id', '[0-9]+');


Route::get('product/{slug}/{id}', function ($slug, $id) {
    return $id . '---' . $slug;
})->where(['id' => '[0-9]+', 'slug' => '[A-Za-z0-9-_]+']);


//Định tuyến qua một view
Route::view('/welcome', 'welcome');

Route::view('/post', 'post', ['id' => 20]);


//Định tuyến qua controller
Route::get('/post/{id}', 'PostController@detail');
