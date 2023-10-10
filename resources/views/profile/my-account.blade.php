@extends("main.main-layout",['data'=>$category,'cart'=>$data])

@section("main-section")


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">My Account</li>
		</ol>
	</div>
</nav>

<div class="page-section sp-inner-page">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<!-- My Account Tab Menu Start -->
					<div class="col-lg-3 col-12">
						<div class="myaccount-tab-menu nav" role="tablist">
							<a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fas fa-tachometer-alt"></i>
								Dashboard</a>

							<a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

							<a href="#download" data-bs-toggle="tab"><i class="fas fa-download"></i> Download</a>

							<a href="#payment-method" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Payment
								Method</a>

							<a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

							<a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>

							<a href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
						</div>
					</div>
					<!-- My Account Tab Menu End -->

					<!-- My Account Tab Content Start -->
					<div class="col-lg-9 col-12 mt--30 mt-lg-0">
						<div class="tab-content" id="myaccountContent">
							<!-- Single Tab Content Start -->
							<div class="tab-pane fade show active" id="dashboad" role="tabpanel">
								<div class="myaccount-content">
									<h3>Dashboard</h3>

									<div class="welcome mb-20">
										<p>Hello, <strong>Alex Tuntuni</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
									</div>

									<p class="mb-0">From your account dashboard. you can easily check &amp; view your
										recent orders, manage your shipping and billing addresses and edit your
										password and account details.</p>
								</div>
							</div>
							<!-- Single Tab Content End -->

							<!-- Orders Tab Content Start -->
							<div class="tab-pane fade" id="orders" role="tabpanel">
								<div class="myaccount-content">
									<h3>Orders</h3>

									@if(sizeof($order)>0)

									<div class="myaccount-table table-responsive text-center">
										<table class="table table-bordered">
											<thead class="thead-light">
												<tr>
													<th>No</th>
													<th>Name</th>
													<th>Date</th>
													<th>Status</th>
													<th>Quantity</th>
													<th>Total</th>
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
												@foreach($order as $key=> $or)
												<tr>
													<td>{{$key+1}}</td>
													<td>{{$or->item_name}}</td>
													<td>{{date('d-M-Y', strtotime($or->created_at))}}</td>
													<td>{{$or->order_status}}</td>
													<td>{{$or->item_quantity}}</td>
													<td>{{$or->total_price}}</td>
													<td><a href="{{route('cart-details')}}" class="btn">View</a></td>
												</tr>


												@endforeach

											</tbody>
										</table>
									</div>

									@else
									<div class="row text-center ms-5">You have no orders Yet.</div>

									@endif
								</div>
							</div>
							<!-- Orders Tab Content End -->

							<!-- Single Tab Content Start -->
							<div class="tab-pane fade" id="download" role="tabpanel">
								<div class="myaccount-content">
									<h3>Downloads</h3>

									<div class="myaccount-table table-responsive text-center">
										<table class="table table-bordered">
											<thead class="thead-light">
												<tr>
													<th>Product</th>
													<th>Date</th>
													<th>Expire</th>
													<th>Download</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>Mostarizing Oil</td>
													<td>Aug 22, 2018</td>
													<td>Yes</td>
													<td><a href="#" class="btn">Download File</a></td>
												</tr>
												<tr>
													<td>Katopeno Altuni</td>
													<td>Sep 12, 2018</td>
													<td>Never</td>
													<td><a href="#" class="btn">Download File</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- Single Tab Content End -->

							<!-- Single Tab Content Start -->
							<div class="tab-pane fade" id="payment-method" role="tabpanel">
								<div class="myaccount-content">
									<h3>Payment Method</h3>

									<p class="saved-message">You Can't Saved Your Payment Method yet.</p>
								</div>
							</div>
							<!-- Single Tab Content End -->

							<!-- Single Tab Content Start -->
							<div class="tab-pane fade" id="address-edit" role="tabpanel">
								<div class="myaccount-content">
									<h3>Billing Address</h3>

									<address>
										<p><strong>{{$order[0]->firstName}} {{$order[0]->lastName}}</strong></p>
										<p>{{$order[0]->address}} <br>
											{{$order[0]->city}} , {{$order[0]->state}} - {{$order[0]->zipCode}}
										</p>
										<p>Mobile: {{$order[0]->phoneNumber}}</p>
									</address>

									<a href="{{route('update-address',['id'=>$order[0]->address_id])}}" class="theme-btn"><i class="fa fa-edit"></i>Edit Address</a>
								</div>
							</div>
							<!-- Single Tab Content End -->

							<!-- Single Tab Content Start -->
							<div class="tab-pane fade" id="account-info" role="tabpanel">
								<div class="myaccount-content">
									<h3>Account Details</h3>

									<div class="account-details-form">

										<div class="row">
											<div class="col-12 mb-30">
												<label for="name"><b>Name</b></label><br>
												<label for="name">{{auth()->user()->name}}</label>
											</div>

											<div class="col-12 mb-30">
												<label for="email"><b>Email</b></label><br>
												<label for="email">{{auth()->user()->email}}</label>
											</div>

											<div class="col-12 mb-30">
												<h4>Password change</h4>
											</div>

											<div class="col-12 mb-30">
												<input id="current-pwd" placeholder="Current Password" type="password">
												<span id="currentPasswordRequired" class="text-danger d-none">Please enter a valid Password</span><br>
											</div>

											<div class="col-lg-6 col-12 mb-30">
												<input id="new-pwd" placeholder="New Password" type="password">
												<span id="newPasswordRequired" class="text-danger d-none">Please enter a valid Password</span><br>
											</div>

											<div class="col-lg-6 col-12 mb-30">
												<input id="confirm-pwd" placeholder="Confirm Password" type="password">
												<span id="confirmPasswordRequired" class="text-danger d-none">Please enter a valid Password</span>
												<span id="passwordMissmatch" class="text-danger d-none">Password Missmatch</span><br>
											</div>

											<div class="col-12">
												<button class="btn btn-primary" onclick="updatePassword()">Save Changes</button>
											</div>

										</div>

									</div>
								</div>
							</div>
							<!-- Single Tab Content End -->
						</div>
					</div>
					<!-- My Account Tab Content End -->
				</div>

			</div>
		</div>
	</div>
</div>
<script>
	function updatePassword() {

		var password = document.getElementById('current-pwd').value;
		var newPassword = document.getElementById('new-pwd').value;
		var confirmPassword = document.getElementById('confirm-pwd').value;


		password == "" ? document.getElementById('currentPasswordRequired').setAttribute('class', 'text-danger d-block') : document.getElementById('currentPasswordRequired').setAttribute('class', 'text-danger d-none');


		newPassword == "" ? document.getElementById('newPasswordRequired').setAttribute('class', 'text-danger d-block') : document.getElementById('newPasswordRequired').setAttribute('class', 'text-danger d-none');


		confirmPassword == "" ? document.getElementById('confirmPasswordRequired').setAttribute('class', 'text-danger d-block') : document.getElementById('confirmPasswordRequired').setAttribute('class', 'text-danger d-none');
		if (confirmPassword != "" && newPassword != confirmPassword) {
			document.getElementById('passwordMissmatch').setAttribute('class', 'text-danger d-block');
		} else {
			document.getElementById('passwordMissmatch').setAttribute('class', 'text-danger d-none');
		}

		if (password != "" && newPassword != "" && confirmPassword != "" && newPassword == confirmPassword) {
			$.ajax({
				url: "http://127.0.0.1:8000/api/update-password",
				method: 'Post',
				data: {
					"password": confirmPassword,
					"currentPassword": password,
					'userEmail': <?php echo json_encode(auth()->user()->email) ?>
				},
				success: function(response) {

					if (response == "success") {
						document.getElementById('current-pwd').value = "";
						document.getElementById('new-pwd').value = "";
						document.getElementById('confirm-pwd').value = "";

						alert("Password changed successfuly.");
					} else {
						alert("Your current password is Incorrect!!");
					}
				},


			});
		}


	}
</script>

@endSection