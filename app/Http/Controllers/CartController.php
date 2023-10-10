<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
   

    function view_cart_page()
    {
        $data =  DB::table('carts')->join('products', 'carts.product_id', '=', 'products.product_id')->get();
        // $data =  Cart::with('products')->get();
        $category =  DB::table("categories")->get();

        return view('cart.cart', ['data' => $data, 'category' => $category]);
    }

    

    function deleteCart(Request $request)
    {

        $cart = Cart::find($request->id);

        if ($cart) {



            $cart->delete();
        }
        return redirect()->back();
    }


  

}
