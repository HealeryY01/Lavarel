<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //
    function add(Request $request)
    {
        // $request->session()->put('username', 'Nguyễn Thế Hiệu');
        // $request->session()->put('login', true);
        session(['username' => 'Nguyễn Thế Hiệu']);
    }
    function show(Request $request)
    {
        // return $request->session()->all();
        //     if ($request->session()->has('username')) {
        //         echo "Đã lưu username vào Session";
        //     }
        // return $request->session()->get('username');
        // return $request->session()->get('status');
        return session('username');
    }
    function add_flash()
    {
        Session::flash('status', 'Bạn đã thêm sản phẩm thành công!');
    }

    function delete(Request $request)
    {
        // Xóa từng phần
        $request->session()->forget('username');
        // Xóa hết tất cả
        $request->session()->flush();
    }
}
