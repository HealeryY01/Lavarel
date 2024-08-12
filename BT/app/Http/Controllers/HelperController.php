<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    //
    function url()
    {
        // 1.Tạo url cơ bản
        // $url = url('login');

        //2.Tạo url qua route

        // $url = route('post.show');

        //3.Tạo url qua action
        // $url = action([PostController::class, 'store']);

        //4. Lấy current url
        $url = url()->current();

        echo $url;
    }
}
