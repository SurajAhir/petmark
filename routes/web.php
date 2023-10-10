<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RazorpayPaymentController;
use Faker\Guesser\Name;
use App\Http\Controllers\AddressController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    $data =  DB::table("categories")->get();
    $cart =  DB::table('carts')->join('products','carts.product_id','=','products.product_id')->get();
    return view('user.index', ["data" => $data,'cart'=>$cart]);
});

Route::get('/index', function () {
    $data =  DB::table("categories")->get();
    $cart =  DB::table('carts')->join('products','carts.product_id','=','products.product_id')->get();

    return view('user.index', ["data" => $data,'cart'=>$cart]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'profile']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //shop
    Route::get('/shop/{id}', [ShopController::class, 'view_shop_page'])->name("shop");

    Route::get('/product-details/{id}', [ShopController::class, 'view_product_page'])->name("product-details");

    //cart
    Route::get('/cart', [CartController::class, 'view_cart_page'])->name("cart-details");
    Route::get('/delete-cart/{id}', [CartController::class, 'deleteCart'])->name("delete-cart");


    //razorpay


    Route::get('/razorpay-payment', [RazorpayPaymentController::class, 'index'])->name('razorpay-payment-screen');
    Route::post('/razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');


    //checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout-screen');

    //address
    Route::get('/contact-info', [AddressController::class, 'viewAddressPage'])->name('view-contact-page');
    Route::get('/update-address', [AddressController::class, 'viewUpdateAddressPage'])->name('update-address');
    Route::post('/update-address', [AddressController::class, 'updateAddress'])->name('update-address');

});

require __DIR__ . '/auth.php';
