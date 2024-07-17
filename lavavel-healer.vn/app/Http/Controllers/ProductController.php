<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id)
    {
        // return "Thông tin sản phẩm id:" . $id;
        $price = 400000;
        $colors = ['red', 'green'];
        return view('product.show', compact('id', 'price', 'colors'));
    }

    function create()
    {
        // return "Thêm sản phảm mới";
        return view('product.create');
    }

    function update($id)
    {
        return "Update sản phẩm có id:" . $id;
    }
}
