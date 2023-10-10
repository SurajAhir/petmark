@extends("main.main-layout",["data"=>$data,'cart'=>$cart])
@section("main-section")


<section>
    <div class=" petmark-slick-slider  home-slider dot-position-1" data-slick-setting='{
        "autoplay": true,
        "autoplaySpeed": 8000,
        "slidesToShow": 1,
        "dots": true}'>
        <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-1.jpg">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">

                        <h2>Delicious bites <br> with benifits</h2>

                        <h4 class="mt--30">100% made in U.S.A chicken breast jerky</h4>

                        <div class="slider-btn mt--30">
                            <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                        </div>

                    </div>
                </div>

            </div>
            <span class="herobanner-progress"></span>
        </div>
        <div class="single-slider home-content bg-image" data-bg="image/bg-images/home-1/slider-2.jpg">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6">

                        <h3>Friends & Family</h3>
                        <h1 class="text-primary">SAVE 25% OFF</h1>
                        <h4 class="mt--20">Flea & ticks Product for Cats</h4>

                        <div class="slider-btn mt--30">
                            <a href="shop.html" class="btn btn-outlined--primary btn-rounded">Shop Now</a>
                        </div>

                    </div>
                </div>
            </div>
            <span class="herobanner-progress"></span>
        </div>
    </div>
</section>


@endSection