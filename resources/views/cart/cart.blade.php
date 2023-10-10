@extends("main.main-layout",['data'=>$category,'cart'=>$data])

@section("main-section")



<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Cart</li>
		</ol>
	</div>
</nav>

<!-- Cart Page Start -->
<div class="cart_area cart-area-padding sp-inner-page--top">
	<div class="container">
		<div class="page-section-title">
			<h1>SHOPPING CART</h1>
		</div>
		<div class="row">
			<div class="col-12">

				<!-- Cart Table -->
				<div class="cart-table table-responsive mb--40">
					<table class="table table-bordered">
						<!-- Head Row -->
						<thead>
							<tr>
								<th class="pro-remove"></th>
								<th class="pro-thumbnail">Image</th>
								<th class="pro-title">Product</th>
								<th class="pro-price">Price</th>
								<th class="pro-quantity">Quantity</th>
								<th class="pro-subtotal">Total</th>
								<th></th>
							</tr>

						</thead>
						<tbody>
							<!-- Product Row -->
							@foreach($data as $cart)


							<tr>
								<td class="pro-remove"><a href="{{route('delete-cart',['id'=>$cart->cart_id])}}"><i class="far fa-trash-alt"></i></a></td>
								<td class="pro-thumbnail"><a href="#"><img src="image/product/home-1/product-1.jpg" alt="Product"></a></td>
								<td class="pro-title"><a href="#">{{$cart->name}}</a></td>
								<td class="pro-price"><span id="price{{$cart->cart_id}}">${{$cart->price}}</span></td>
								<td class="pro-quantity">
									<div class="pro-qty">
										<div class="count-input-block">
											<input type="number" onclick="updateQuantity(<?php echo json_encode($cart->cart_id) ?>)" id="quantity{{$cart->cart_id}}" class="form-control text-center" value={{$cart->quantity}} min="1">
										</div>
									</div>
								</td>
								<td class="pro-subtotal"><span id="totalPrice{{$cart->cart_id}}">$395.00</span></td>
								<td><a style="cursor: pointer;" id="updateCartBtn{{$cart->cart_id}}" onclick="updateCart(<?php echo json_encode($cart->cart_id) ?>)" class="text-red">Update</a></td>
							</tr>
							@endforeach



							<!-- Discount Row  -->
							<!-- <tr>
								<td colspan="6" class="actions">

									<div class="coupon-block">
										<div class="coupon-text">
											<label for="coupon_code">Coupon:</label>
											<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
										</div>
										<div class="coupon-btn">
											<input type="submit" class="btn-black" name="apply_coupon" value="Apply coupon">
										</div>
									</div>

									<div class="update-block text-end">
										<input type="submit" class="btn-black" name="update_cart" id="updateCartBtn" value="Update cart">
										<input type="hidden" id="_wpnonce" name="_wpnonce" value="05741b501f"><input type="hidden" name="_wp_http_referer" value="/petmark/cart/">
									</div>
								</td>
							</tr> -->

						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</div>

<div class="cart-section-2 sp-inner-page--bottom">
	<div class="container">
		<div class="row justify-content-end">
			
			<!-- Cart Summary -->
			<div class="col-lg-6 col-12 d-flex">
				<div class="cart-summary">
					<div class="cart-summary-wrap">
						<h4><span>Cart Summary</span></h4>
						<p>Sub Total <span class="text-primary" id="subTotal">$1250.00</span></p>
						<p>Shipping Cost <span class="text-primary">$00.00</span></p>
						<h2>Grand Total <span class="text-primary" id="grandTotal">$1250.00</span></h2>
					</div>
					<div class="cart-summary-button">
						<a href="{{route('checkout-screen')}}" class="checkout-btn c-btn">Checkout</a>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Cart Page End -->


<script>
	//update quantity and total price in startup

	var subTotal=0;
	var cartArray = <?php echo json_encode($data); ?>;

	cartArray.forEach(element => {
		console.log(element['cart_id']);

		var price = Number(document.getElementById('price' + element['cart_id']).innerText.replace("$", ""));

		var totalPriceTag = document.getElementById('totalPrice' + element['cart_id']);
		var totalPrice = Number(document.getElementById('totalPrice' + element['cart_id']).innerText.replace("$", ""));
		var quantityTag = document.getElementById('quantity' + element['cart_id']);

		var quantity = Number(document.getElementById('quantity' + element['cart_id']).value);
		totalPriceTag.innerText = "$" + quantity * price;
		subTotal=subTotal+Number(totalPriceTag.innerText.replace("$",""));
	});

	//setting subTotal and grandTotal
	document.getElementById('subTotal').innerText="$"+subTotal;
	document.getElementById('grandTotal').innerText="$"+subTotal;


	//update quantity and total price
	function updateQuantity(id) {
		var price = Number(document.getElementById('price' + id).innerText.replace("$", ""));

		var totalPriceTag = document.getElementById('totalPrice' + id);
		var totalPrice = Number(document.getElementById('totalPrice' + id).innerText.replace("$", ""));
		var quantityTag = document.getElementById('quantity' + id);

		var quantity = Number(document.getElementById('quantity' + id).value);
		totalPriceTag.innerText = "$" + quantity * price;

		quantityTag.addEventListener('click', function() {
			var quantity = Number(document.getElementById('quantity' + id).value);
			console.log("quantity" + quantity + " price" + price + "totalPrice " + totalPrice);
			totalPriceTag.innerText = "$" + quantity * price;

		});


	}

	//update cart
	function updateCart(id) {

		var quantity = Number(document.getElementById('quantity' + id).value);

		$.ajax({
			url: "http://127.0.0.1:8000/api/update-cart",
			method: 'Post',
			data: {
				"cart_id": id,
				"quantity": quantity
			},
			success: function(response) {
				console.log(response["status"]);
				if (response["status"] == 0) {
					console.log("updated");
					document.getElementById('updateCartBtn' + id).innerText = "Updated";
				} else {

					console.log("failed");
				}
			},


		});


	}
</script>
@endSection