@extends('layouts.index')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')


<div class="slider-area section-padding-1">
    <div class="slider-active owl-carousel nav-style-1">

        @foreach ($sliders as $item)
        <div class="single-slider slider-height-1 bg-paleturquoise">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated">Wooden Craft</h1>
                            <p class="animated">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It is a long established fact that a reader.</p>
                            <div class="slider-btn btn-hover">
                                <a class="animated" href="shop.html">Shop Now <i class="sli sli-basket-loaded"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated" src="{{ asset($item->slider_image) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>
<div class="banner-area pt-100 pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="{{ asset('parlo/assets/img/banner/banner-1.png') }}" alt=""></a>
                    <div class="banner-content banner-position-1">
                        <h3>35% off <br>Black Monday</h3>
                        <h2>Lighting For <br> Home.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="{{ asset('parlo/assets/img/banner/banner-2.png') }}" alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>15% off</h3>
                        <h2>Table Shiner <br>Moving.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img class="animated" src="{{ asset('parlo/assets/img/banner/banner-3.png') }}" alt=""></a>
                    <div class="banner-content banner-position-2">
                        <h3>Black Friday</h3>
                        <h2>Wall Lighting <br>Black.</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-70">
    <div class="container">
        <div class="section-title text-center pb-40">
            <h2>All Products</h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
        </div>
        <div class="product-tab-list nav pb-60 text-center">
            <a class="active" href="#product-1" data-toggle="tab">
                <h4>Home appliance </h4>
            </a>
            <a href="#product-2" data-toggle="tab">
                <h4>Kitchen appliance </h4>
            </a>
            <a href="#product-3" data-toggle="tab">
                <h4>Lamps</h4>
            </a>
        </div>
        <div class="tab-content jump-2">


            <div id="product-1" class="tab-pane active">

                <div class="ht-products product-slider-active owl-carousel">
                    @foreach ($product_features as $key=>$item)
                    <!--Product Start-->
                    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                        <div class="ht-product-inner">
                            <div class="ht-product-image-wrap">
                                <a href="product-details.html" class="ht-product-image"> <img src="{{ asset($item->product_image_path) }}" alt="Universal Product Style"> </a>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ht-product-content">
                                <div class="ht-product-content-inner">
                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                    <h4 class="ht-product-title"><a href="product-details.html">{{ $item->name}}</a></h4>
                                    <div class="ht-product-price">
                                        <span class="new">{{ number_format($item->price,0,'',',') }}đ</span>
                                        <span class="old">$80.00</span>
                                    </div>
                                    <div class="ht-product-ratting-wrap">
                                        <span class="ht-product-ratting">
                                            <span class="ht-product-user-ratting" style="width: 100%;">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="ht-product-action">
                                    <ul>
                                        <li><a href="#"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                        <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                        <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                    </ul>
                                </div>
                                <div class="ht-product-countdown-wrap">
                                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Product End-->
                    @endforeach
                </div>
            </div>


        </div>
    </div>
</div>
<div class="product-area pt-95 pb-70">
    <div class="container">
        <div class="section-title text-center pb-60">
            <h2>New Arrivals</h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
        </div>
        <div class="arrivals-wrap scroll-zoom">
            <div class="ht-products product-slider-active owl-carousel">
                @foreach ($product_news as $item)
                    <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="{{ asset($item->product_image_path) }}" alt="Universal Product Style"> </a>
                            <div class="ht-product-action">
                                <ul>
                                    <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                    <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                    <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                    <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ht-product-content">
                            <div class="ht-product-content-inner">
                                <div class="ht-product-categories"><a href="#">Clock</a></div>
                                <h4 class="ht-product-title"><a href="">{{ $item->name }}</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">{{ number_format($item->price,0,'',',') }}</span>
                                </div>
                                <div class="ht-product-ratting-wrap">
                                    <span class="ht-product-ratting">
                                        <span class="ht-product-user-ratting" style="width: 100%;">
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </span>
                                    <i class="sli sli-star"></i>
                                    <i class="sli sli-star"></i>
                                    <i class="sli sli-star"></i>
                                    <i class="sli sli-star"></i>
                                    <i class="sli sli-star"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="ht-product-action">
                                <ul>
                                    <li><a href="#"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                                    <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                                    <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                                    <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                </ul>
                            </div>
                            <div class="ht-product-countdown-wrap">
                                <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Product End-->
                @endforeach


            </div>
        </div>
    </div>
</div>
<div class="banner-area pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom" >
                    <a href="product-details.html"><img src="{{ asset('parlo/assets/img/banner/banner-4.png') }}" alt=""></a>
                    <div class="banner-content banner-position-3">
                        <h3>Black Monday</h3>
                        <h2>Wooden Lamp <br>Save 30%</h2>
                        <a href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-banner mb-30 scroll-zoom">
                    <a href="product-details.html"><img src="{{ asset('parlo/assets/img/banner/banner-5.jpg') }}" alt=""></a>
                    <div class="banner-content banner-position-4">
                        <h3  style="color: #fff">Black Monday</h3>
                        <h2 style="color: #fff">Apple Iphone <br>Save 30%</h2>
                        <a  style="color: #fff" href="product-details.html">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="single-feature mb-40">
                    <div class="feature-icon">
                        <img src="{{ asset('parlo/assets/img/icon-img/free-shipping.png') }}" alt="">
                    </div>
                    <div class="feature-content">
                        <h4>Free Shipping</h4>
                        <p>Most product are free <br>shipping.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 col-md-4">
                <div class="single-feature mb-40 pl-50">
                    <div class="feature-icon">
                        <img src="{{ asset('parlo/assets/img/icon-img/support.png')}}" alt="">
                    </div>
                    <div class="feature-content">
                        <h4>Customer Support</h4>
                        <p>24x7 Customer Support</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-4">
                <div class="single-feature mb-40">
                    <div class="feature-icon">
                        <img src="{{ asset('parlo/assets/img/icon-img/security.png') }}" alt="">
                    </div>
                    <div class="feature-content">
                        <h4>Secure Payment</h4>
                        <p>Most Secure Payment <br>for customer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-area pt-50 pb-65">
    <div class="container">
        <div class="section-title text-center pb-60">
            <h2>New Blog Posts</h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="blog-wrap mb-30 mr-20 text-center scroll-zoom">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-details.html">Distracted by the readable content</a></h3>
                        <div class="blog-meta blog-mrg-border">
                            <ul>
                                <li><a href="#">23 December 2019 </a></li>
                                <li><a href="#"> 24 View </a></li>
                                <li><a href="#">4 likes</a></li>
                            </ul>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="blog-wrap mb-30 ml-20 text-center scroll-zoom">
                    <div class="blog-img mb-25">
                        <a href="blog-details.html"><img src="assets/img/blog/blog-2.jpg" alt=""></a>
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-details.html">There are many variations of passages of Lorem</a></h3>
                        <div class="blog-meta blog-mrg-border">
                            <ul>
                                <li><a href="#">23 December 2019 </a></li>
                                <li><a href="#"> 24 View </a></li>
                                <li><a href="#">4 likes</a></li>
                            </ul>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
