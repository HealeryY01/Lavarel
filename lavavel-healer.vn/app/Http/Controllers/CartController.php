<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    function show()
    {
        return  view('cart.show');
    }
    function add(Request $request, $id)
    {
        // Cart::destroy();
        $product = Product::find($id);
        // return $product;
        Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'options' => ['thumbnail' => $product->thumbnail]
        ]);
        // echo "<pre>";
        // print_r(Cart::Content());
        return redirect('cart/show');
    }

    function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('cart/show');
    }

    function destroy()
    {
        Cart::destroy();
        return redirect('cart/show');
    }

    function update(Request $request)
    {
        $data = $request->get('qty');
        foreach ($data as $k => $v) {
            Cart::update($k, $v);
        }
        return redirect('cart/show');
    }
}
