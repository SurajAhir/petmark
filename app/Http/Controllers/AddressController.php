<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{


   

    function viewupdateAddressPage(Request $request){
        $data =  DB::table('carts')->join('products', 'carts.product_id', '=', 'products.product_id')->get();
        $category =  DB::table("categories")->get();

        $address=DB::table('addresses')->where('address_id','=',$request->id)->get()->first();
        return view('address.updateAddress', ['data' => $data, 'category' => $category,'address'=>$address,]);
    }


    function updateAddress(Request $request){
        

        $address=Address::find($request->id);

        if($address){
          
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
           
            $address->save();

        }

        session()->put("isAddressUpdated","true");
    
        return redirect('/profile');
    }
}
