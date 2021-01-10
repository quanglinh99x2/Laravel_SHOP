<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 16:48:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('parlo/assets/img/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('parlo/assets/css/bootstrap.min.css') }}">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('parlo/assets/css/icons.min.css') }}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('parlo/assets/css/plugins.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('parlo/assets/css/style.css') }}">
    <!-- Modernizer JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body>
<div class="wrapper">
    @include('partials.header')

    @yield('content')

    <footer class="footer-area bg-paleturquoise">
        <div class="container">
            <div class="footer-top text-center pt-45 pb-45">
                <nav>
                    <ul>
                        <li><a href="{{ asset('parlo/index.html') }}">Home </a></li>
                        <li><a href="{{ asset('parlo/shop.html') }}">Shop </a></li>
                        <li><a href="{{ asset('parlo/shop.html') }}">Accessories  </a></li>
                        <li><a href="{{ asset('parlo/contact-us.html') }}">Contact </a></li>
                        <li><a href="{{ asset('parlo/about-us.html') }}">About </a></li>
                        <li><a href="{{ asset('parlo/blog.html') }}">Blog </a></li>

                    </ul>
                </nav>
            </div>
        </div>
        <div class="footer-bottom border-top-1 pt-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="footer-social pb-20">
                            <a href="parlo/#">Facebok</a>
                            <a href="parlo/#">Twitter</a>
                            <a href="parlo/#">Linkedin</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="copyright text-center pb-20">
                            <p>Copyright © All Right Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="payment-mathod pb-20">
                            <a href="parlo/#"><img src="{{ asset('parlo/assets/img/icon-img/payment.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="{{ asset('parlo/assets/img/product/quickview-l1.jpg') }}" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="{{ asset('parlo/assets/img/product/quickview-l2.jpg') }}" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="{{ asset('parlo/assets/img/product/quickview-l3.jpg') }}" alt="">
                                </div>
                                <div id="pro-4" class="tab-pane fade">
                                    <img src="{{ asset('parlo/assets/img/product/quickview-l2.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- Thumbnail Large Image End -->
                            <!-- Thumbnail Image End -->
                            <div class="quickview-wrap mt-15">
                                <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                    <a class="active" data-toggle="tab" href="parlo/#pro-1"><img src="{{ asset('parlo/assets/img/product/quickview-s1.jpg') }}" alt=""></a>
                                    <a data-toggle="tab" href="parlo/#pro-2"><img src="{{ asset('parlo/assets/img/product/quickview-s2.jpg') }}" alt=""></a>
                                    <a data-toggle="tab" href="parlo/#pro-3"><img src="{{ asset('parlo/assets/img/product/quickview-s3.jpg') }}" alt=""></a>
                                </div>
                                </div>
                                <a data-toggle="tab" href="parlo/#pro-4"><img src="{{ asset('parlo/assets/img/product/quickview-s2.jpg') }}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="product-details-content quickview-content">
                                <h2>Products Name Here</h2>
                                <div class="product-details-price">
                                    <span>$18.00 </span>
                                    <span class="old">$20.00 </span>
                                </div>
                                <div class="pro-details-rating-wrap">
                                    <div class="pro-details-rating">
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star yellow"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <span>3 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-list">
                                    <ul>
                                        <li>- 0.5 mm Dail</li>
                                        <li>- Inspired vector icons</li>
                                        <li>- Very modern style  </li>
                                    </ul>
                                </div>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                                <li class="gray"></li>
                                                <li class="green"></li>
                                                <li class="yellow"></li>
                                                <li class="white"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="parlo/#">s</a></li>
                                                <li><a href="parlo/#">m</a></li>
                                                <li><a href="parlo/#">l</a></li>
                                                <li><a href="parlo/#">xl</a></li>
                                                <li><a href="parlo/#">xxl</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                    </div>
                                    <div class="pro-details-cart">
                                        <a href="parlo/#">Add To Cart</a>
                                    </div>
                                    <div class="pro-details-wishlist">
                                        <a title="Add To Wishlist" href="parlo/#"><i class="sli sli-heart"></i></a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a title="Add To Compare" href="parlo/#"><i class="sli sli-refresh"></i></a>
                                    </div>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Categories :</span>
                                    <ul>
                                        <li><a href="parlo/#">Minimal,</a></li>
                                        <li><a href="parlo/#">Furniture,</a></li>
                                        <li><a href="parlo/#">Fashion</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-meta">
                                    <span>Tag :</span>
                                    <ul>
                                        <li><a href="parlo/#">Fashion, </a></li>
                                        <li><a href="parlo/#">Furniture,</a></li>
                                        <li><a href="parlo/#">Electronic</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>

<!-- All JS is here
============================================ -->
<script src="{{ asset('parlo/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!-- jQuery JS -->
<script src="{{ asset('parlo/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('parlo/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('parlo/assets/js/bootstrap.min.js') }}"></script>
<!-- Plugins JS -->
<script src="{{ asset('parlo/assets/js/plugins.js') }}"></script>
<!-- Ajax Mail -->
<script src="{{ asset('parlo/assets/js/ajax-mail.js') }}"></script>
<!-- Main JS -->
<script src="{{ asset('parlo/assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from demo.hasthemes.com/parlo/parlo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jan 2021 16:51:10 GMT -->
</html>
