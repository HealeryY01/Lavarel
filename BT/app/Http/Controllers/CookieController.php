<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    //
    function set()
    {
        Cookie::queue('unitop', 'Học web đi làm', 24 * 60);
    }

    function get(Request $request)
    {
        return $request->cookie('unitop');
    }
}
