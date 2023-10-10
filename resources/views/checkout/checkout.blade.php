@extends("main.main-layout",['data'=>$category,'cart'=>$carts])

@section("main-section")


@php
$totalPrice=0;

foreach($carts as $cart){
$totalPrice=$totalPrice+$cart->price;
}
@endphp
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="index.html">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Checkout</li>
		</ol>
	</div>
</nav>

<main id="content" class="page-section sp-inner-page checkout-area-padding space-db--20">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<!-- Checkout Form s-->
				<div class="checkout-form">
					<div class="row row-40">
						<div class="col-12">
							<h1 class="quick-title">CHECKOUT</h1>
							<!-- Slide Down Trigger  -->
							<div class="checkout-quick-box">
								<p><i class="far fa-sticky-note"></i>Returning customer? <a href="javascript:" class="slide-trigger" data-bs-target="#quick-login">Click
										here to login</a></p>
							</div>
							<!-- Slide Down Blox ==> Login Box  -->
							<div class="checkout-slidedown-box" id="quick-login">
								<form action="https://htmldemo.net/petmark/petmark/">
									<div class="quick-login-form">
										<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new
											customer
											please
											proceed to the Billing & Shipping section.</p>
										<div class="form-group">
											<label for="quick-user">Username or email *</label>
											<input type="text" placeholder="">
										</div>
										<div class="form-group">
											<label for="quick-user">Password *</label>
											<input type="text" placeholder="">
										</div>
										<div class="form-group">
											<div class="d-flex align-items-center">
												<a href="#" class="btn btn-black">Login</a>
												<div class="d-inline-flex align-items-center  ms-3">
													<input type="checkbox" id="accept_terms" class="mb-0 me-1">
													<label for="accept_terms" class="mb-0">I’ve read and accept the terms &amp; conditions</label>
												</div>
											</div>
											<p><a href="javascript:" class="pass-lost mt-3">Lost your password?</a></p>
										</div>
									</div>
								</form>

							</div>

							<!-- Slide Down Trigger  -->
							<div class="checkout-quick-box">
								<p><i class="far fa-sticky-note"></i>Have a coupon? <a href="javascript:" class="slide-trigger" data-bs-target="#quick-cupon">
										Click here to enter your code</a></p>
							</div>
							<!-- Slide Down Blox ==> Cupon Box -->
							<div class="checkout-slidedown-box" id="quick-cupon">
								<form action="https://htmldemo.net/petmark/petmark/">
									<div class="checkout_coupon">
										<input type="text" class="mb-0" placeholder="Coupon Code">
										<a href="#" class="btn btn-black">Apply coupon</a>
									</div>
								</form>
							</div>

						</div>
						<div class="col-lg-7 mb--20">
							<!-- Billing Address -->


							<div id="billing-form" class="mb-40">
								<h4 class="checkout-title">Billing Address</h4>

								<div class="row">

									<!-- <form action="{{url('/address')}}" method="post"> -->
									<!-- @csrf -->
									<div class="col-md-6 col-12 mb--20">
										<label>First Name*</label>
										<input type="text" id="firstName" name="firstName" autofocus required placeholder="First Name">
										<span id="firstNameError" class="text-danger d-none">Please fill out this field.</span>
									</div>

									<div class="col-md-6 col-12 mb--20">
										<label>Last Name*</label>
										<input type="text" id="lastName" name="lastName" autofocus required placeholder="Last Name">
										<span id="lastNameError" class="text-danger d-none">Please fill out this field.</span>
									</div>
									<div class="col-12 mb--20">
										<label>Company Name</label>
										<input type="text" id="companyName" name="companyName" placeholder="Company Name">

									</div>
									<!-- <div class="col-12 col-12 mb--20">
										<label>Country*</label>
										<select class="nice-select">
											<option>Bangladesh</option>
											<option>China</option>
											<option>country</option>
											<option>India</option>
											<option>Japan</option>
										</select>
									</div> -->
									<div class="col-12 mb--20">
										<label>Country*</label>
										<input type="text" id="country" name="country" autofocus required placeholder="Country">
										<span id="countryError" class="text-danger d-none">Please fill out this field.</span>
									</div>
									<div class="col-md-6 col-12 mb--20">
										<label>Email Address*</label>
										<input type="email" id="email" name="email" autofocus required placeholder="Email Address">
										<span id="emailError" class="text-danger d-none">Please fill out this field.</span>
									</div>
									<div class="col-md-6 col-12 mb--20">
										<label>Phone no*</label>
										<input type="text" id="phoneNumber" name="phoneNumber" autofocus required placeholder="Phone number">
										<span id="phoneError" class="text-danger d-none">Please fill out this field.</span>
									</div>



									<div class="col-12 mb--20">
										<label>Address*</label>
										<input type="text" id="address" name="address" autofocus required placeholder="Address line 1">
										<span id="addressError" class="text-danger d-none">Please fill out this field.</span>

									</div>


									<div class="col-md-6 col-12 mb--20">
										<label>Town/City*</label>
										<input type="text" id="city" name="city" autofocus required placeholder="Town/City">
										<span id="cityError" class="text-danger d-none">Please fill out this field.</span>
									</div>

									<div class="col-md-6 col-12 mb--20">
										<label>State*</label>
										<input type="text" id="state" name="state" autofocus required placeholder="State">
										<span id="stateError" class="text-danger d-none">Please fill out this field.</span>
									</div>

									<div class="col-md-6 col-12 mb--20">
										<label>Zip Code*</label>
										<input type="text" id="zipCode" name="zipCode" autofocus required placeholder="Zip Code">
										<span id="zipError" class="text-danger d-none">Please fill out this field.</span>
									</div>

									<div class="col-12 mb--20">

										<button class="btn btn-primary" id="submitBtn" type="button">Save Details</button>
										<!-- <input type="submit" id="zipCode" autofocus required placeholder="Zip Code"> -->
									</div>
									<!-- </form> -->

								</div>

							</div>



						</div>

						<div class="col-lg-5">
							<div class="row">

								<!-- Cart Total -->
								<div class="col-12">
									<div class="checkout-cart-total">
										<h2 class="checkout-title">YOUR ORDER</h2>
										<h4>Product <span>Total</span></h4>

										<ul class="mt-2">
											@foreach($carts as $cart)
											<li><span class="left">{{$cart->name}}</span> <span class="right">${{$cart->price}}</span></li>
											@endforeach

										</ul>

										<p>Sub Total <span>${{$totalPrice}}</span></p>
										<p>Shipping Fee <span>$00.00</span></p>

										<h4>Grand Total <span>${{$totalPrice}}</span></h4>

										<div class="bg-primary mt--25" style=" height: 3px;">
											<div class="hr"></div>
										</div>
										<div class="term-block mt--25">
											<input type="checkbox" id="accept_terms2">
											<label for="accept_terms2">I’ve read and accept the terms & conditions</label>
										</div>
										<button class="place-order w-100"><a href="{{route('razorpay-payment-screen')}}">Place order</a></button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>



<script>
	var session = <?php echo json_encode(session()->get("address")); ?>;
	console.log(session);
	if (session == "false") {
		alert("Please enter your address details to proceed");
	}


	let btn = document.getElementById("submitBtn");
	btn.addEventListener("click", (e) => {

		var firstName = document.getElementById("firstName").value;
		var lastName = document.getElementById("lastName").value;
		var companyName = document.getElementById("companyName").value;
		var country = document.getElementById("country").value;
		var email = document.getElementById("email").value;
		var phoneNumber = document.getElementById("phoneNumber").value;
		var address = document.getElementById("address").value;
		var city = document.getElementById("city").value;
		var state = document.getElementById("state").value;
		var zipCode = document.getElementById("zipCode").value;

		firstName == "" ? document.getElementById('firstNameError').setAttribute("class", "text-danger d-block") : document.getElementById('firstNameError').setAttribute("class", "text-danger d-none");

		lastName == "" ? document.getElementById('lastNameError').setAttribute("class", "text-danger d-block") : document.getElementById('lastNameError').setAttribute("class", "text-danger d-none");

		country == "" ? document.getElementById('countryError').setAttribute("class", "text-danger d-block") : document.getElementById('countryError').setAttribute("class", "text-danger d-none");


		email == "" ? document.getElementById('emailError').setAttribute("class", "text-danger d-block") : document.getElementById('emailError').setAttribute("class", "text-danger d-none");

		phoneNumber == "" ? document.getElementById('phoneError').setAttribute("class", "text-danger d-block") : document.getElementById('phoneError').setAttribute("class", "text-danger d-none");

		address == "" ? document.getElementById('addressError').setAttribute("class", "text-danger d-block") : document.getElementById('addressError').setAttribute("class", "text-danger d-none");


		city == "" ? document.getElementById('cityError').setAttribute("class", "text-danger d-block") : document.getElementById('cityError').setAttribute("class", "text-danger d-none");

		state == "" ? document.getElementById('stateError').setAttribute("class", "text-danger d-block") : document.getElementById('stateError').setAttribute("class", "text-danger d-none");

		zipCode == "" ? document.getElementById('zipError').setAttribute("class", "text-danger d-block") : document.getElementById('zipError').setAttribute("class", "text-danger d-none");

		var data = {
			"firstName": firstName,
			"lastName": lastName,
			'companyName': companyName,
			'country': country,
			'email': email,
			'phoneNumber': phoneNumber,
			'address': address,
			'city': city,
			'state': state,
			'zipCode': zipCode,
			'userId': <?php echo json_encode($userId) ?>
		};
		// console.log(data);

		$.ajax({
			url: "http://127.0.0.1:8000/api/address",
			method: 'Post',
			data: data,
			success: function(response) {


				if (response['status'] == 200) {
					document.getElementById("firstName").value = "";
					document.getElementById("lastName").value = "";
					document.getElementById("companyName").value = "";
					document.getElementById("country").value = "";
					document.getElementById("email").value = "";
					document.getElementById("phoneNumber").value = "";
					document.getElementById("address").value = "";
					document.getElementById("city").value = "";
					document.getElementById("state").value = "";
					document.getElementById("zipCode").value = "";
	<?php 
	session()->put('address','true');
	?>
					alert("Address saved.");

				} else {
					alert("Some Error Occured!")
				}

			},


		});


	});
</script>
@endSection