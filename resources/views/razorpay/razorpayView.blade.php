@extends("main.main-layout",['data'=>$category,'cart'=>$carts])

@section("main-section")

<main class="py-4 card">
    <div class="col-md-6 offset-3 col-md-offset-6 ">




        <div class="card card-default">
            <div class="card-header">

                <div class="row">
                    @if($message = Session::get('error'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <div> {{ $message }}</div>
                        <button type="button" class="btn-close" id="btnClose" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif


                    @if($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <div>Payment {{ $message }}</div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <script>
                    document.getElementById('btnClose').addEventListener('click', function() {

                
                        <?php 
                        session()->put("success","");
                        session()->put("error","");
                        
                        
                        ?>
                    });
                </script>

                <div class="row justify-content-center pt-3">
                    <h5 class="text-center">Order Summary</h5>
                </div>
                <div class="row">
                    <div class="col text-center"><b>Name</b></div>
                    <div class="col text-center"><b>Price</b></div>
                    <div class="col text-center"><b>Quantity</b></div>
                </div>

                @foreach($carts as $cart)
                <div class="row">
                    <div class="col text-center">{{$cart->name}}</div>
                    <div class="col text-center">{{$cart->price}}</div>
                    <div class="col text-center">{{$cart->quantity}}</div>
                </div>
                @endforeach


                <address class="ps-5 pt-5">
                    <h5>Address:</h5>

                    {{$address[0]->address}}<br>
                    City - {{$address[0]->city}}<br>
                    Country - {{$address[0]->country}}<br>
                    ZipCode - {{$address[0]->zipCode}}<br>
                    Email - {{$address[0]->email}}<br>
                    Contact - {{$address[0]->phoneNumber}}<br>
                </address>


                <div class="row">
                    <div class="card-body text-center">
                        <form action="{{ route('razorpay.payment.store') }}" method="POST">
                            @csrf
                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZORPAY_KEY') }}" data-amount="{{$data['amount']}}" data-buttontext="Pay {{$data['amount']/100}} INR" data-name="ItSolutionStuff.com" data-description="Rozerpay" data-image="https://www.itsolutionstuff.com/frontTheme/images/logo.png" data-prefill.name="{{auth()->user()->name}}" data-prefill.email="{{auth()->user()->email}}" data-theme.color="#ff0529" data-order_id="{{$data['order_id']}}" data-currency="INR">
                            </script>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
</main>


<script>
    var cart = <?php echo json_encode($carts); ?>;

    var quantity = 0;
    var price = 0;
    var itemName = "";
    var check = 0;
    cart.forEach(element => {

        quantity = quantity + Number(element['quantity']);
        price = price + Number(element['price']);
        if (check == 0) {
            itemName = itemName + element['name'];
        } else {
            itemName = itemName + " , " + element['name'];
        }
        check++;

    });

    document.getElementById('itemName').innerText = itemName;
    document.getElementById('price').innerText = price;
    document.getElementById('quantity').innerText = quantity;
</script>
@endSection