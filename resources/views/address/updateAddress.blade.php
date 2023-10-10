@extends("main.main-layout",['data'=>$category,'cart'=>$data])

@section("main-section")


<section>


    <nav aria-label="breadcrumb" class="breadcrumb-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Address</li>
            </ol>
        </div>
    </nav>



    <main id="content" class="page-section sp-inner-page checkout-area-padding space-db--20">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Checkout Form s-->
                    <div class="checkout-form">
                        <div class="col-lg-7 mb--20">
                            <!-- Address -->

                            <form  action="{{route('update-address',['id'=>$address->address_id])}}" method="post">
                                @csrf
                                <div id="billing-form" class="mb-40">
                                    <h4 class="checkout-title">Billing Address</h4>

                                    <div class="row">


                                        <div class="col-md-6 col-12 mb--20">
                                            <label>First Name*</label>
                                            <input type="text" id="firstName" value="{{$address->firstName}}" name="firstName" autofocus required placeholder="First Name">
                                            <span id="firstNameError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Last Name*</label>
                                            <input type="text" id="lastName" value="{{$address->lastName}}" name="lastName" autofocus required placeholder="Last Name">
                                            <span id="lastNameError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>
                                        <div class="col-12 mb--20">
                                            <label>Company Name</label>
                                            <input type="text" id="companyName" value="{{$address->companyName}}" name="companyName" placeholder="Company Name">

                                        </div>

                                        <div class="col-12 mb--20">
                                            <label>Country*</label>
                                            <input type="text" id="country" name="country" value="{{$address->country}}" autofocus required placeholder="Country">
                                            <span id="countryError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Email Address*</label>
                                            <input type="email" id="email" name="email" value="{{$address->email}}" autofocus required placeholder="Email Address">
                                            <span id="emailError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>
                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Phone no*</label>
                                            <input type="text" id="phoneNumber" value="{{$address->phoneNumber}}" name="phoneNumber" autofocus required placeholder="Phone number">
                                            <span id="phoneError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>



                                        <div class="col-12 mb--20">
                                            <label>Address*</label>
                                            <input type="text" id="address" value="{{$address->address}}" name="address" autofocus required placeholder="Address line 1">
                                            <span id="addressError" class="text-danger d-none">Please fill out this field.</span>

                                        </div>


                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Town/City*</label>
                                            <input type="text" id="city" value="{{$address->city}}" name="city" autofocus required placeholder="Town/City">
                                            <span id="cityError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb--20">
                                            <label>State*</label>
                                            <input type="text" id="state" value="{{$address->state}}" name="state" autofocus required placeholder="State">
                                            <span id="stateError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>

                                        <div class="col-md-6 col-12 mb--20">
                                            <label>Zip Code*</label>
                                            <input type="text" id="zipCode" value="{{$address->zipCode}}" name="zipCode" autofocus required placeholder="Zip Code">
                                            <span id="zipError" class="text-danger d-none">Please fill out this field.</span>
                                        </div>

                                        <div class="col-12 mb--20">

                                            <button class="btn btn-primary">Update Address</button>

                                        </div>


                                    </div>

                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</section>



<script>
    var message = <?php echo json_encode(session()->get('isAddressUpdated')) ?>

    console.log(message);
    if (message == "true") {
        <?php echo json_encode(session()->put("isAddressUpdated", "false")) ?>;
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
        
    }
</script>

@endSection