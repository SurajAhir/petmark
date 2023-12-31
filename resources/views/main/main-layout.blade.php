<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/petmark/petmark/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 04:55:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{  asset('image/favicon.ico')}}">
    <title>Petmark - Pet Care & Veterinary Bootstrap Template</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<body class="">
    <div class="site-wrapper">

        <header class="header petmark-header-1 mb-1">
            <div class="header-wrapper">
                <!-- Site Wrapper Starts -->
                <div class="header-top bg-ash">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-sm-6 text-center text-sm-start">
                                <p class="font-weight-300">Welcome to Acacia Pet Food</p>

                            </div>
                            <div class="col-sm-6">
                                <div class="header-top-nav right-nav">
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Language:</span><a class="slide-down--btn" href="#" role="button">
                                            English<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">En</a></li>
                                            <li><a href="#">En</a></li>
                                        </ul>
                                    </div>
                                    <div class="nav-item slide-down-wrapper">
                                        <span>Currency:</span><a class="slide-down--btn" href="#" role="button">
                                            USD<i class="ion-ios-arrow-down"></i>
                                        </a>
                                        <ul class="dropdown-list slide-down--item">
                                            <li><a href="#">EUR</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <!-- Template Logo -->
                            <div class="col-lg-3 col-md-12 col-sm-4">
                                <div class="site-brand  text-center text-lg-start">
                                    <a href="index.html" class="brand-image">
                                        <img src="{{asset('image/main-logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Category With Search -->
                            <div class="col-lg-5 col-md-7 order-3 order-md-2">
                                <form class="category-widget">
                                    <input type="text" name="search" placeholder="Search products ">
                                    <div class="search-form__group search-form__group--select">
                                        <select name="category " id="searchCategory" class="search-form__select nice-select">
                                            <option value="all">All Categories</option>
                                            @foreach($data as $cat)
                                            <option value={{$cat->category_id}}>{{$cat->name}}</option>
                                            @endforeach



                                        </select>
                                    </div>
                                    <button class="search-submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Call Login & Track of Order -->
                            <div class="col-lg-4 col-md-5 col-sm-8 order-2 order-md-3">
                                <div class="header-widget-2 text-center text-sm-end ">
                                    <div class="call-widget">
                                        <p>CALL US NOW: <i class="icon ion-ios-telephone"></i><span class="font-weight-mid">+91-012
                                                345 678</span></p>
                                    </div>
                                    <ul class="header-links">
                                        <li><a href="cart.html"><i class="fas fa-car-alt"></i> Track Your Order</a></li>
                                        <li>
                                            @auth
                                            <a href="/profile"><i class="fas fa-user"></i> MyAccount</a>
                                            @else
                                            <a href="/register"><i class="fas fa-user"></i> Register or Sign in</a>
                                            @endauth

                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-nav-wrapper">
                <div class="container">
                    <div class="header-bottom-inner">
                        <div class="row g-0">
                            <!-- Category Nav -->
                            <div class="col-lg-3 col-md-8">
                                <!-- Category Nav Start -->
                                <div class="category-nav-wrapper bg-blue">
                                    <div class="category-nav">
                                        <h2 class="category-nav__title primary-bg" onclick="navBarClick()" id="js-cat-nav-title"><i class="fa fa-bars"></i>
                                            <span>All Categories</span>
                                        </h2>

                                        <ul class="category-nav__menu" id="js-cat-nav" style="display: none;">

                                            @foreach($data as $cat)

                                            <li class="category-nav__menu__item">
                                                <a onclick="navItemClick()" href="{{route('shop',['id'=>$cat->category_id])}}">{{$cat->name}}</a>

                                            </li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                                <!-- Category Nav End -->
                                <div class="category-mobile-menu"></div>
                            </div>
                            <!-- Main Menu -->
                            <div class="col-lg-7 d-none d-lg-block">
                                <nav class="main-navigation">
                                    <!-- Mainmenu Start -->
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html">Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children ">
                                            <a href="shop.html" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column">
                                                <li>
                                                    <a href="shop.html">Shop Page</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">List Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">Product Details 1</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details Page</a></li>
                                                        <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                                                        <li><a href="product-details-grouped.html">Product Details Group</a></li>
                                                        <li><a href="product-details-left-thumbnail.html">Left Thumbnail</a></li>
                                                        <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Product Details 2</a>
                                                    <ul>
                                                        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
                                                        <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                                        <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                    <!-- Mainmenu End -->
                                </nav>
                            </div>
                            <!-- Cart block-->
                            <div class="col-lg-2 col-6 offset-6 offset-md-0 col-md-3 order-3">
                                <div class="cart-widget-wrapper slide-down-wrapper">
                                    <a href="{{route('cart-details')}}">
                                        <div class="cart-widget slide-down--btn">
                                            <div class="cart-icon">
                                                <i class="ion-bag"></i>
                                                <span class="cart-count-badge">
                                                    {{sizeof($cart)}}
                                                </span>
                                            </div>
                                            <div class="cart-text">
                                                <span class="d-block">Your cart</span>
                                                <strong><span class="amount" id="cartTotalAmount"><span class="currencySymbol">$</span>40.00</span></strong>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12 d-flex d-lg-none order-2 mobile-absolute-menu">
                                <!-- Main Mobile Menu Start -->
                                <div class="mobile-menu"></div>
                                <!-- Main Mobile Menu End -->
                            </div>
                        </div>
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="fixed-header sticky-init">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <!-- Sticky Logo Start -->
                                <a class="sticky-logo" href="index.html">
                                    <img src="{{asset('image/main-logo.png')}}" alt="logo">
                                </a>
                                <!-- Sticky Logo End -->
                            </div>
                            <div class="col-lg-9">
                                <!-- Sticky Mainmenu Start -->
                                <nav class="sticky-navigation">
                                    <ul class="mainmenu sticky-menu">
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="index.html" class="mainmenu__link">Home</a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="index.html">Home 1</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">Home 2</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">Home 3</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">Home 4</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                            <a href="#" class="mainmenu__link">Pages</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="about-us.html">About Us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us 1</a></li>
                                                        <li><a href="about-us-2.html">About Us 2</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="contact.html">Contact</a>
                                                    <ul class="sub-menu">

                                                        <li><a href="contact.html">Contact 1</a></li>
                                                        <li><a href="contact-2.html">Contact 2</a></li>

                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="service.html">Services</a>
                                                    <ul class="sub-menu">

                                                        <li>
                                                            <a href="service.html">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="service-2.html">Services 2</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item ">
                                            <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="blog.html" class="mainmenu__link">Blog</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog Gird</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog.html">Blog Full Width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-list.html">Blog List</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                                        <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog-details.html">Blog Details</a>
                                                    <ul class="sub-menu left-align">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-details.html">Image Format</a></li>
                                                        <li><a href="blog-details-video.html">Video Format</a></li>
                                                        <li><a href="blog-details-gallery.html">Gallery Format</a></li>
                                                        <li><a href="blog-details-audio.html">Audio Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item menu-item-has-children sticky-has-child ">
                                            <a href="shop.html" class="mainmenu__link">Shop</a>
                                            <ul class="megamenu three-column">
                                                <li>
                                                    <a href="shop.html">Shop Page</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Grid Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Grid Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">List Fullwidth</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">List Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="product-details.html">Product Details 1</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details Page</a></li>
                                                        <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                                                        <li><a href="product-details-grouped.html">Product Details Group</a></li>
                                                        <li><a href="product-details-left-thumbnail.html">Left Thumbnail</a></li>
                                                        <li><a href="product-details-right-thumbnail.html">Right Thumbnail</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="shop.html">Product Details 2</a>
                                                    <ul>
                                                        <!-- <li><a href="product-details-left-gallery.html">left Thumbnail</a></li> -->
                                                        <li><a href="product-details-left-gallery.html">Left Gallery</a></li>
                                                        <li><a href="product-details-right-gallery.html">Right Gallery</a></li>
                                                    </ul>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                    <div class="sticky-mobile-menu  d-lg-none">
                                        <span class="sticky-menu-btn"></span>
                                    </div>
                                </nav>
                                <!-- Sticky Mainmenu End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield("main-section")


        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Contact</h3>
                            <div class="single-footer-content">
                                <p class="text-italic">We are a team of designers and developers that create high quality Wordpress, Magento, Prestashop, Opencart.</p>
                                <p class="font-weight-500 text-white"><span class="d-block">Contact info:</span>
                                    169-C, Technohub, Dubai Silicon Oasis.</p>
                                <p class="social-icons">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fas fa-rss"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">Information</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">My orders</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Shipping & Delivery</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">About Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">CUSTOMER CARE</h3>
                            <div class="single-footer-content">
                                <ul class="footer-list">
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Site Map</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Notification</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer contact-block">
                            <h3 class="footer-title">SUBSCRIBE TO OUR NEWSLETTER</h3>
                            <div class="single-footer-content">
                                <p>
                                    Subscribe to the Petmark mailing list to receive updates on new arrivals, special offers and other discount information.
                                </p>
                                <div class="pt-2">
                                    <div class="input-box-with-icon">
                                        <input type="text" placeholder="Enter Your email">
                                        <button><i class="fas fa-envelope"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-block-2 text-center">
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="#">Online Shopping</a></li>

                        <li><a href="#">Promotions</a></li>

                        <li><a href="#"> My Orders</a></li>

                        <li><a href="#">Help</a></li>

                        <li><a href="#">Customer Service</a></li>

                        <li><a href="#">Support</a></li>

                        <li><a href="#"> Most Populars</a></li>

                        <li><a href="#">New Arrivals</a></li>

                        <li><a href="#">Special Products</a></li>

                        <li><a href="#">Manufacturers</a></li>

                        <li><a href="#">Our Stores</a></li>
                    </ul>
                    <ul class="footer-list list-inline justify-content-center">
                        <li><a href="#">Shipping</a></li>

                        <li><a href="#">Payments</a></li>

                        <li><a href="#">Warantee</a></li>

                        <li><a href="#">Refunds</a></li>

                        <li><a href="#">Checkout</a></li>

                        <li><a href="#">Discount</a></li>

                        <li><a href="#">Terms & Conditions</a></li>

                        <li><a href="#"> Policy</a></li>

                        <li><a href="#">Special Products</a></li>

                        <li><a href="#">Manufacturers</a></li>

                        <li><a href="#">Our Stores</a></li>
                    </ul>
                    <div class="payment-block pt-3">
                        <img src="{{asset('image/icon-logo/payment-icons.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <p>© Petmark, 2022. Made with ❤️ by <a href="https://hasthemes.com/">HasThemes.</a></p>
            </div>
        </footer>

    </div>
    <script src="js/plugins.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/custom.js"></script>

    <script>
        var isClickedOnNav = false;

        function navItemClick() {
            document.getElementById('js-cat-nav').style.display = 'none';

        }


        function navBarClick() {
            if (isClickedOnNav) {
                document.getElementById('js-cat-nav').style.display = 'none';
                isClickedOnNav = false;
            } else {
                document.getElementById('js-cat-nav').style.display = 'block';
                isClickedOnNav = true;
            }
        }

        var cart = <?php echo json_encode($cart); ?>;

        var amount = 0;
        cart.forEach(element => {
            amount = amount + Number(element['price']);
        });

        document.getElementById('cartTotalAmount').innerText = "$"+amount;
    </script>
</body>


<!-- Mirrored from htmldemo.net/petmark/petmark/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 May 2023 04:55:05 GMT -->

</html>