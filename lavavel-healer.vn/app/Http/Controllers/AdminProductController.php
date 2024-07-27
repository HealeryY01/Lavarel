<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    //
    function add()
    {
        DB::table('product')->insert(
            [
                'name' => 'Iphone 8',
                'content' => 'Nội dung mô tả sản phẩm iphone 11',
                'price' => 15000000,
                'user_id' => 6,
                'product_cat_id' => 1
            ]
        );
    }

    function update($id)
    {
        DB::table('product')
            ->where('id', $id)
            ->update(
                [
                    'price' => 35000000
                ]
            );
    }

    function show()
    {
        $product = DB::table('product')
            ->get();
        return $product;
    }

    function delete($id)
    {
        DB::table('product')
            ->where('id', $id)
            ->delete();
    }
}
