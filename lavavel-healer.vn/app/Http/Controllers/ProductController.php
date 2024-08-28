<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    // function show()
    // {
    //     // return "Thông tin sản phẩm id:" . $id;
    //     // $price = 400000;
    //     // $colors = ['red', 'green'];
    //     // return view('product.show', compact('id', 'price', 'colors'));
    //     return view('product.show');
    // }

    // function create()
    // {
    //     // return "Thêm sản phảm mới";
    //     return view('product.create');
    // }

    // function update($id)
    // {
    //     return "Update sản phẩm có id:" . $id;
    // }

    function show()
    {
        $products = Product::all();
        return view('product.show', compact('products'));
    }
}
