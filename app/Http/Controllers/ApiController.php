<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;

use App\Models\Address;
class ApiController extends Controller
{


    //login
    public function loginUser(LoginRequest $request)
    {
        $request->validate([
            'email' => "required|email",
            'password' => "required"
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {

            $token = $user->createToken($request->email)->plainTextToken;
            return response(["token" => $token, "user" => $user]);
        } else {
            return response(["message" => "Invalid Credientials!"]);
        }
    }


    //register
    public function registerUser(Request $request)
    {



        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        return response(["message" => "Registration successull"]);
    }

    //update Password
    function updatePassword(Request $request)
    {

        $user1 = User::where('email', '=', $request->userEmail)->first();
        if ($user1) {
            if (Hash::check($request->currentPassword, $user1->password)) {

                $user1->password = Hash::make($request->password);
                $user1->save();

                return "success";
            }
        }
        return "error";
    }


    //api part
    function getCategory()
    {

        $category =  DB::table("categories")->get();
        return response(["message" => "success", "category" => $category]);
    }

    function deleteCartUsingApi(int $id)
    {

        $cart = Cart::find($id);

        if ($cart) {

            $cart->delete();
            return response(["message" => true]);
        } else {
            return response(["message" => false]);
        }
    }
    function getCarts()
    {
        $cart = Cart::with('products')->where('userId', '=', auth()->user()->id)->get();
        // $cart=DB::table('carts')->join('products', 'carts.product_id', '=', 'products.product_id')->get();

        return response(["message" => "success", "cart" => $cart]);
    }

    function updateCart(Request $request)
    {

        $cart = Cart::find($request->cart_id);

        if ($cart) {

            $cart->quantity = $request->quantity == "" ? 1 : $request->quantity;
            $cart->save();
            return ["status" => 0];
        } else {
            return ["status" => 1];
        }
    }

    function addToCart(Request $request)
    {



        $isCartAvail = DB::table("carts")->where('userId', '=', $request->userId)->where('product_id', '=', $request->product_id)->get()->first();
        if ($isCartAvail) {

            return response(["message" => "Already Added"]);
        } else {
            $cart = Cart::create([
                "product_id" => $request->product_id,
                "quantity" => $request->quantity,
                "userId" => $request->userId
            ]);
            return $cart;
        }
    }


    //products
    function getProducts(int $id){
        $products=DB::table("products")->where('category_id', '=', $id)->get();

        if($products){
            return response(["message"=>"success","category"=>$products]);
        }else{
            return response(["message"=>"success","category"=>[]]);
        }
    }

    //address
    function saveAddress(Request $request)
    {


        $address1 = DB::table('addresses')->where('userId', '=', $request->userId)->first();

        if ($address1) {

            $address = Address::find($address1->address_id);
            $address->firstName = $request->firstName;
            $address->lastName = $request->lastName;
            $address->companyName = $request->companyName == null ? "" : $request->companyName;
            $address->country = $request->country;
            $address->email = $request->email;
            $address->phoneNumber = $request->phoneNumber;
            $address->address = $request->address;
            $address->city = $request->city;
            $address->state = $request->state;
            $address->zipCode = $request->zipCode;
            $address->userId = $request->userId;
            $address->save();
            if ($address) {
                return ['status' => true];
            } else {
                return ['status' => false];
            }
        } else {
            $address =    Address::create([

                "firstName" => $request->firstName,
                "lastName" => $request->lastName,
                'companyName' => $request->companyName == null ? "" : $request->companyName,
                'country' => $request->country,
                'email' => $request->email,
                'phoneNumber' => $request->phoneNumber,
                'address' => $request->address,
                'city' => $request->city,
                'state' => $request->state,
                'zipCode' => $request->zipCode,
                'userId' => $request->userId
            ]);
            if ($address) {
                return ['status' => true];
            } else {
                return ['status' =>false];
            }
        }
    }

    function getAddress() {

    
        $address = DB::table('addresses')->where('userId', '=', auth()->user()->id)->first();
        if($address){
            return response(["message" => "success", "address" => $address]);
        }else{
            return response(["message" => "success", "address" => null]);
        }
       
    }

    //orders

    function getOrders() {
        
       $order= DB::table('orders')->join('addresses', 'orders.address_id', '=', 'addresses.address_id')->where('userId', '=', auth()->user()->id)->get();

       return response(["message"=>"success","order"=>$order]);
    }
    
}
