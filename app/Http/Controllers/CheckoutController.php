<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CheckoutController extends Controller
{
   
    function index() {
        
        $carts =  DB::table('carts')->join('products','carts.product_id','=','products.product_id')->get();
  
        $category =  DB::table("categories")->get();
        $userId=auth()->user()->id;
        return view('checkout.checkout', ['carts' => $carts, 'category' => $category,'userId'=>$userId]);
    }
}
