<?php


use App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//login api
Route::post('/login',[ApiController::class,'loginUser']);

//registration
Route::post('/register',[ApiController::class,'registerUser']);


Route::middleware('auth:sanctum')->group(function(){


//change password
Route::post('/update-password',[ApiController::class,"updatePassword"]);


//category
Route::get("/category",[ApiController::class,'getCategory']);

//products
Route::get("/products/{id}",[ApiController::class,'getProducts']);



//cart
Route::post('/cart', [ApiController::class, "addToCart"]);
Route::get('/cart', [ApiController::class, "getCarts"]);
Route::post('/update-cart', [ApiController::class, "updateCart"]);
Route::get('/delete-cart/{id}', [ApiController::class, "deleteCartUsingApi"]);



//address
Route::post('/address', [ApiController::class, "saveAddress"]);
Route::get('/address', [ApiController::class, "getAddress"]);


//order
Route::get('/orders', [ApiController::class,"getOrders"]);

});