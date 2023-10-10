@extends("main.main-layout",['data'=>$category,'cart'=>$data])

@section("main-section")


<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Product Details</li>
    </ol>
  </div>
</nav>
<!-- Product Details Block -->
<main class="product-details-section">
  <div class="container">
    <div class="pm-product-details">
      <div class="row">
        <!-- Blog Details Image Block -->
        <div class="col-md-6">
          <div class="image-block">
            <!-- Zoomable IMage -->
            <img id="zoom_03" src="{{asset('image/others/blog-1.jpg')}}" data-zoom-image="{{asset('image/others/blog-1.jpg')}}" alt="" />

            <!-- Product Gallery with Slick Slider -->
            <div id="product-view-gallery" class="elevate-gallery">
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-1.jpg" data-zoom-image="image/product/product-details/product-details-1.jpg">
                <img src="image/product/product-details/product-details-1.jpg" alt="" />
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-2.jpg" data-zoom-image="image/product/product-details/product-details-2.jpg">
                <img src="image/product/product-details/product-details-2.jpg" alt="" />
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-3.jpg" data-zoom-image="image/product/product-details/product-details-3.jpg">
                <img src="image/product/product-details/product-details-3.jpg" alt="" />
              </a>
              <!-- Slick Single -->
              <a href="#" class="gallary-item" data-image="image/product/product-details/product-details-4.jpg" data-zoom-image="image/product/product-details/product-details-4.jpg">
                <img src="image/product/product-details/product-details-4.jpg" alt="" />
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="description-block">
            <div class="header-block">
              <h3>{{$data[0]->name}}</h3>
              <div class="navigation">
                <a href="#"><i class="ion-ios-arrow-back"></i></a>
                <a href="#"><i class="ion-ios-arrow-forward"></i></a>
              </div>
            </div>
            <!-- Rating Block -->
            <div class="rating-block d-flex  mt--10 mb--15">
              <div class="rating-widget">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
              <p class="rating-text"><a href="#comment-form">(1 customer review)</a></p>
            </div>
            <!-- Price -->
            <p class="price"><span class="old-price">250$</span>{{$data[0]->price}}$</p>
            <!-- Blog Short Description -->
            <div class="product-short-para">
              <p>
                {{$data[0]->description}}
              </p>
            </div>
            <div class="status">
              <i class="fas fa-check-circle"></i>300 IN STOCK
            </div>
            <!-- Amount and Add to cart -->
            <div class="add-to-cart">
              <div class="count-input-block">
                <input type="number" id="quantity" class="form-control text-center" value="1" min="1">
              </div>
              @if($isAddedToCart=="true")
              <div class="btn-block">
                <button  class="btn btn-rounded btn-outlined--primary">Added to cart</button>
              </div>
              @else
              <div class="btn-block" id="btn-addToCart">
                <button id="addToCartBtn" class="btn btn-rounded btn-outlined--primary">Add to cart</button>
              </div>
              @endif

            </div>




            
            <!-- Wishlist And Compare -->
            <div class="btn-options">
              <a href="wishlist.html"><i class="ion-ios-heart-outline"></i>Add to Wishlist</a>
              <a href="compare.html"><i class="ion-ios-shuffle"></i>Add to Compare</a>
            </div>
            <!-- Products Tag & Category Meta -->
            <div class="product-meta mt--30">
              <p>Catagories: <a href="#" class="single-meta">Bedroom</a>, <a href="#" class="single-meta">Decor
                  & Furniture</a></p>
              <p>Tags: <a href="#" class="single-meta">Food</a></p>
            </div>
            <!-- Share Block 1 -->
            <div class="share-block-1">
              <ul class="social-btns">
                <li><a href="#" class="facebook"><i class="far fa-thumbs-up"></i><span>likes 1</span></a></li>
                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i> <span>twitter</span></a></li>
                <li><a href="#" class="google"><i class="fas fa-plus-square"></i> <span>share</span></a></li>
              </ul>
            </div>
            <!-- Sharing Block 2 -->
            <div class="share-block-2  mt--30">
              <h4>SHARE THIS PRODUCT</h4>
              <ul class="social-btns social-btns-2">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="review-section pt--60">
    <h2 class="sr-only d-none">Product Review</h2>
    <div class="container">

      <div class="product-details-tab">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">REVIEWS (1)</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <article>
              {{$data[0]->description}}
            </article>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="review-wrapper">
              <h2 class="title-lg mb--20">1 REVIEW FOR AUCTOR GRAVIDA ENIM</h2>
              <div class="review-comment mb--20">
                <div class="avatar">
                  <img src="image/icon-logo/author-logo.png" alt="">
                </div>
                <div class="text">
                  <div class="rating-widget mb--15">
                    <span class="single-rating"><i class="fas fa-star"></i></span>
                    <span class="single-rating"><i class="fas fa-star"></i></span>
                    <span class="single-rating"><i class="fas fa-star"></i></span>
                    <span class="single-rating"><i class="fas fa-star-half-alt"></i></span>
                    <span class="single-rating"><i class="far fa-star"></i></span>
                  </div>
                  <h6 class="author">ADMIN – <span class="font-weight-400">March 23, 2015</span> </h6>
                  <p>Lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.</p>
                </div>
              </div>
              <h2 class="title-lg mb--20 pt--15">ADD A REVIEW</h2>
              <div class="rating-row pt-2">
                <p class="d-block">Your Rating</p>
                <span class="rating-widget-block">
                  <input type="radio" name="star" id="star1">
                  <label for="star1"></label>
                  <input type="radio" name="star" id="star2">
                  <label for="star2"></label>
                  <input type="radio" name="star" id="star3">
                  <label for="star3"></label>
                  <input type="radio" name="star" id="star4">
                  <label for="star4"></label>
                  <input type="radio" name="star" id="star5">
                  <label for="star5"></label>
                </span>
                <form action="https://htmldemo.net/petmark/petmark/" class="mt--15 site-form ">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="message">Comment</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" id="name" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="text" id="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" id="website" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="submit-btn">
                        <a href="#" class="btn btn-black">Post Comment</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <!-- Slider bLock 4 -->
    <div class="pt--60">
      <div class="container">

        <div class="block-title">
          <h2>YOU MAY ALSO LIKE…</h2>
        </div>
        <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-1.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-2.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-3.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-4.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-1/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="pt--60">
      <div class="container">

        <div class="block-title">
          <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="petmark-slick-slider border normal-slider" data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 3000,
                            "slidesToShow": 5,
                            "arrows": true
                        }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 3} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1,"rows" :1} }
                        ]'>

          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-1.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-2.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-3.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-4.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="single-slide">
            <div class="pm-product">
              <div class="image">
                <a href="product-details.html"><img src="image/product/home-2/product-5.jpg" alt=""></a>
                <span class="onsale-badge">Sale!</span>
              </div>
              <div class="content">
                <h3>Convallis quam sit</h3>
                <div class="price text-red">
                  <span class="old">$200</span>
                  <span>$300</span>
                </div>
                <div class="btn-block">
                  <a href="cart.html" class="btn btn-outlined btn-rounded">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
</main>


<script>
              var product_id = <?php echo json_encode($data[0]->product_id); ?>;

              var tag = document.getElementById('addToCartBtn');




              tag.addEventListener('click', function() {
                var quantity = document.getElementById('quantity').value;




                $.ajax({
                  url: "http://127.0.0.1:8000/api/cart",
                  method: 'Post',
                  data: {
                    "product_id": product_id,
    
                    "quantity": quantity,
                    'userId':<?php echo json_encode($userId) ?>
                  },
                  success: function(response) {

                    document.getElementById('btn-addToCart').innerHTML = '<button type="button" class="btn btn-rounded btn-outlined--primary">Added to Cart</button>';
                  },


                });


              });
            </script>
@endSection