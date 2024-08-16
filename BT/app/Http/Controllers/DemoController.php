<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    //
    function sendmail()
    {
        $data = [
            'key1' => 'Dữ liệu động được chuyền vào từ controller'
        ];
        Mail::to('nguyenthehieua2001@gmail.com')->send(new DemoMail($data));
    }
}
