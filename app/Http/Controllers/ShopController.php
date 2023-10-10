<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    function view_shop_page(int $id)
    {
        $data =  DB::table("products")->where('category_id', '=', $id)->get();
        $category =  DB::table("categories")->get();
        $carts =  $cart =  DB::table('carts')->join('products','carts.product_id','=','products.product_id')->get();
        
        $userId=auth()->user()->id;
        return view('shop.shop', ['data' => $data, 'category' => $category, 'carts' => $carts,'userId'=>$userId]);
    }

    function view_product_page(int $id)
    {
        $data =  DB::table("products")->where('product_id', '=', $id)->get();
        $category =  DB::table("categories")->get();
        $cart =  DB::table("carts")->where('product_id', '=', $id)->get();
        $isAddedToCart = "false";
        if ($cart) {
            $isAddedToCart = "true";
        }
        $userId=auth()->user()->id;
        $carts =DB::table('carts')->join('products','carts.product_id','=','products.product_id')->get();
        return view('shop.product-details', ['data' => $data, 'category' => $category, 'isAddedToCart' => $isAddedToCart,'carts'=>$carts,'userId'=>$userId]);
    }



    
   
}
