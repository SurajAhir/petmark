<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Exception;
use Faker\Core\Number;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class RazorpayPaymentController extends Controller
{

    public function index()
    {

        $category =  DB::table("categories")->get();
        $cart =  DB::table('carts')->join('products', 'carts.product_id', '=', 'products.product_id')->get();
        $totalPrice = 0;

        foreach ($cart as $cart1) {
            $totalPrice = $totalPrice + $cart1->price;
        }
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order  = $api->order->create(array('receipt' => '123', 'amount' => $totalPrice * 100, 'currency' => 'INR')); // Creates order
        $orderId = $order['id'];
        $data = [
            'order_id' => $orderId,
            'amount' => $totalPrice * 100
        ];

        $address = DB::table("addresses")->where('userId', '=', auth()->user()->id)->latest()->get();

        if (sizeof($address->all()) > 0) {

            session()->put('address', 'true');
            return view('razorpay.razorpayView', ['category' => $category, 'carts' => $cart, 'data' => $data, 'address' => $address]);
        } else {

            session()->put('address', 'false');
            return redirect()->back();
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $cart =  DB::table('carts')->join('products', 'carts.product_id', '=', 'products.product_id')->get();


        $status = 0;
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        $payment = $api->payment->fetch($input['razorpay_payment_id']);

        $message = "";
        if (count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $attributes = array(
                    'razorpay_signature' => $input['razorpay_signature'],
                    'razorpay_payment_id' => $input['razorpay_payment_id'],
                    'razorpay_order_id' => $input['razorpay_order_id']
                );
                $order = $api->utility->verifyPaymentSignature($attributes);
                $status = 1;
                $message = "successful";
                session()->put("success", "successful");
            } catch (Exception $e) {
                $status = 0;
                $message = $e->getMessage();
                session()->put("error", $e->getMessage());
            }
        }

        $address = DB::table('addresses')->where('userId', '=', auth()->user()->id)->first();
        if ($status == 1) {
            foreach ($cart as $data) {

                Transaction::create([
                    'item_name' => $data->name,
                    'item_price' => $data->price,
                    'item_quantity' => $data->quantity,
                    'user_id' => auth()->user()->id,
                    'paid_status' => "paid",
                    'order_id' => $input['razorpay_order_id'],
                    'transaction_id' => $input['razorpay_payment_id'],
                    'address_id' => $address->address_id
                ]);

                Order::create([
                    'item_name' => $data->name,
                    'total_price' => $data->price,
                    'item_quantity' => $data->quantity,
                    'user_id' => auth()->user()->id,
                    'order_status' => "pending",

                    'address_id' => $address->address_id
                ]);
            }
        } else {
            foreach ($cart as $data) {

                Transaction::create([
                    'item_name' => $data->name,
                    'item_price' => $data->price,
                    'item_quantity' => $data->quantity,
                    'user_id' => auth()->user()->id,
                    'paid_status' => "fail",
                    'order_id' => $input['razorpay_order_id'],
                    'transaction_id' => $input['razorpay_payment_id'],
                    'address_id' => $address->address_id
                ]);
            }
        }


        return redirect()->back()->with('message', $message);
    }
}
