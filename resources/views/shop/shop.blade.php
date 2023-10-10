@extends("main.main-layout",['data'=>$category,'cart'=>$carts])

@section("main-section")


<!-- Modal -->
<div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog" aria-labelledby="quickModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="pm-product-details">
        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close">

        </button>
        <div class="row">
          <!-- Blog Details Image Block -->
          <div class="col-md-6">
            <div class="image-block">
              <!-- Zoomable IMage -->
              <img id="zoom_03" src="image/product/product-details/product-details-1.jpg" data-zoom-image="image/product/product-details/product-details-1.jpg" alt="" />

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

          <div class="col-md-6 mt-4 mt-lg-0">
            <div class="description-block">
              <div class="header-block">
                <h3>Diam vel neque</h3>
              </div>
              <!-- Price -->
              <p class="price"><span class="old-price">250$</span>300$</p>
              <!-- Rating Block -->
              <div class="rating-block d-flex  mt--10 mb--15">
                <p class="rating-text"><a href="#comment-form">See all features</a></p>
              </div>
              <!-- Blog Short Description -->
              <div class="product-short-para">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                  tristique auctor. Donec non est at libero vulputate rutrum.
                </p>
              </div>
              <div class="status">
                <i class="fas fa-check-circle"></i>300 IN STOCK
              </div>
              <!-- Amount and Add to cart -->
              <form action="https://htmldemo.net/petmark/petmark/" class="add-to-cart">
                <div class="count-input-block">
                  <input type="number" class="form-control text-center" value="1" min="1">
                </div>
                <div class="btn-block">
                  <a href="#" class="btn btn-rounded btn-outlined--primary">Add to cart</a>
                </div>
              </form>
              <!-- Sharing Block 2 -->
              <div class="share-block-2 mt--30">
                <h4>SHARE THIS PRODUCT</h4>
                <ul class="social-btns social-btns-3">
                  <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Shop</li>
    </ol>
  </div>
</nav>
<main class="section-padding shop-page-section">
  <div class="container">

    <div class="shop-toolbar mb--30">
      <div class="row align-items-center">
        <div class="col-5 col-md-3 col-lg-4">
          <!-- Product View Mode -->
          <div class="product-view-mode">
            <a href="#" class="sortting-btn active" data-bs-target="list "><i class="fas fa-list"></i></a>
            <a href="#" class="sortting-btn" data-bs-target="grid"><i class="fas fa-th"></i></a>
          </div>
        </div>
        <!-- <div class="col-12 col-md-9 col-lg-7 offset-lg-1 mt-3 mt-md-0  pe-md-0">
          <div class="sorting-selection">
            <div class="row align-items-center ps-md-0 pe-md-0 g-0">
              <div class="col-sm-6 col-md-7 col-xl-8 d-flex align-items-center justify-content-md-end">

                <span>Sort By:</span>
                <select id="input-sort" class="form-control nice-select sort-select" style="display: none;">
                  <option value="" selected="selected">Default Sorting</option>
                  <option value="">Sort
                    By:Name (A - Z)</option>
                  <option value="">Sort
                    By:Name (Z - A)</option>
                  <option value="">Sort
                    By:Price (Low &gt; High)</option>
                  <option value="">Sort
                    By:Price (High &gt; Low)</option>
                  <option value="">Sort
                    By:Rating (Highest)</option>
                  <option value="">Sort
                    By:Rating (Lowest)</option>
                  <option value="">Sort
                    By:Model (A - Z)</option>
                  <option value="">Sort
                    By:Model (Z - A)</option>
                </select>
                <div class="nice-select form-control sort-select" tabindex="0"><span class="current">Default Sorting</span>
                  <ul class="list">
                    <li data-value="" class="option selected">Default Sorting</li>
                    <li data-value="" class="option">Sort
                      By:Name (A - Z)</li>
                    <li data-value="" class="option">Sort
                      By:Name (Z - A)</li>
                    <li data-value="" class="option">Sort
                      By:Price (Low &gt; High)</li>
                    <li data-value="" class="option">Sort
                      By:Price (High &gt; Low)</li>
                    <li data-value="" class="option">Sort
                      By:Rating (Highest)</li>
                    <li data-value="" class="option">Sort
                      By:Rating (Lowest)</li>
                    <li data-value="" class="option">Sort
                      By:Model (A - Z)</li>
                    <li data-value="" class="option">Sort
                      By:Model (Z - A)</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-5 col-xl-4 col-sm-6 text-sm-end mt-sm-0 mt-3">
                <span>
                  Showing 1–20 of 52 results
                </span>
              </div>
            </div>
          </div>
        </div> -->

      </div>
    </div>

    <div class="shop-product-wrap grid with-pagination row border grid-four-column  me-0 ms-0 g-0">

      @foreach($data as $product)
      <div class="col-lg-3 col-sm-6">

        <div class="pm-product  ">
          <a href="{{route('product-details',['id'=>$product->product_id])}}" class="image" tabindex="0">
            <img src="{{asset('image/others/blog-1.jpg')}}" width="100" height="100" alt="">
          </a>
          <div class="hover-conents">
            <ul class="product-btns">
              <li><a href="wishlist.html" tabindex="0"><i class="ion-ios-heart-outline"></i></a></li>
              <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
              <li><a href="#" data-bs-toggle="modal" data-bs-target="#quickModal" tabindex="0"><i class="ion-ios-search"></i></a></li>
            </ul>
          </div>
          <div class="content">
            <h3 class="font-weight-500"><a href="product-details.html">{{$product->name}}</a></h3>
            <div class="price text-red">
              <span class="old">$300</span>
              <span>{{$product->price}}</span>
            </div>
            <div class="btn-block" id="btn-addToCart{{$product->product_id}}">
              <button onclick="addToCart(<?php echo json_encode($product->product_id) ?>)" class="btn btn-rounded btn-outlined--primary">Add to cart</button>
            </div>

            <div class="card-list-content ">
              <div class="rating-widget mt--20">
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star"></i></a>
                <a href="#" class="single-rating"><i class="fas fa-star-half-alt"></i></a>
                <a href="#" class="single-rating"><i class="far fa-star"></i></a>
              </div>
              <article>
                <h3 class="d-none sr-only">Article</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Nam fringilla augue nec est tristique auctor.</p>
              </article>
              <div class="btn-block d-flex">
                <a href="cart.html" class="btn btn-outlined btn-rounded btn-mid" tabindex="0">Add to Cart</a>
                <div class="btn-options">
                  <a href="wishlist.html"><i class="ion-ios-heart-outline"></i>Add to Wishlist</a>
                  <a href="compare.html"><i class="ion-ios-shuffle"></i>Add to Compare</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>




      @endforeach
    </div>

    <!-- <div class="mt--30">
      <div class="pagination-widget">
        <div class="site-pagination">
          <a href="#" class="single-pagination">|&lt;</a>
          <a href="#" class="single-pagination">&lt;</a>
          <a href="#" class="single-pagination active">1</a>
          <a href="#" class="single-pagination">2</a>
          <a href="#" class="single-pagination">&gt;</a>
          <a href="#" class="single-pagination">&gt;|</a>
        </div>
      </div>

    </div> -->

  </div>
</main>
<script>
  var cart = <?php echo json_encode($carts); ?>;
  var product = <?php echo json_encode($data); ?>;

  product.forEach(element => {


    cart.forEach(element1 => {
      if (element1['product_id'] == element['product_id']) {
        document.getElementById('btn-addToCart' + element['product_id']).innerHTML = '<button type="button" class="btn btn-rounded btn-outlined--primary">Added to Cart</button>';
      }

    });
  });


  function addToCart(id) {

    console.log(id);
    $.ajax({
      url: "http://127.0.0.1:8000/api/cart",
      method: 'Post',
      data: {
        "product_id": id,
        "quantity": 1,
        'userId':<?php echo json_encode($userId) ?>
      },
      success: function(response) {

        document.getElementById('btn-addToCart' + id).innerHTML = '<button type="button" class="btn btn-rounded btn-outlined--primary">Added to Cart</button>';
      },


    });
  }
</script>

@endSection