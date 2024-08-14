<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

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
        // $url = url()->current();

        // echo $url;
    }
    function string()
    {
        //1.Lấy độ dài của chuỗi
        // $str_1 = "Unitop.vn";
        // echo Str::length($str_1);


        //2. In thường một chuỗi
        // $str = "Nguyễn Thế Hiệu";
        // echo Str::lower($str);
        //3. In hoa một chuỗi
        // echo Str::upper($str);

        //4.Radom string
        // echo Str::random(20);

        //.5.Loại bỏ ký tự dư thừa
        // $str = Str::of('   Unitop.vn  abbbdfg   ')->trim();
        // echo $str;

        //6. Tạo ra slug=>Làm link thân thiện
        //Unitop.vn Học web đi làm => unitop.vn-học-web-di-lam
        // $str = Str::slug('Unitop.vn Học web đi làm');
        // echo $str;

        //7.Lấy chuỗi con
        // $str = 'Laravel Pro';
        // echo Str::of($str)->substr(8);
        // echo Str::of($str)->substr(0, 7);

        //8.Nối chuỗi vào sau đuôi
        // echo Str::of('Nguyễn Thế ')->append('Hiệu');

        //9. Tìm kiếm và thay thế chuỗi
        // $str = 'Laravel 7x';
        // echo Str::of($str)->replace('7x', '6x');

        //10.Cắt chuỗi với số ký tự cho trước
        // $str = "Bình Luận Tiếng Việt: KT vs DRX | KDF vs T1 | Tuần 9 Ngày 1 | LCK Mùa Hè 2024";
        // echo Str::of($str)->limit(60);

        //11.Kiêm tra chuỗi cha chứa chuỗi con

        $str = "Unitop.vn Học lập trình web đi làm ";
        echo Str::contains($str, 'Unitop');
    }
}
