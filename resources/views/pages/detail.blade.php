@extends('layouts.index')
@section('title')
<title>Chi tiết sản phẩm</title>
@endsection
@section('css')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('quanglinhstore/css/flexslider.css') }}" > --}}
@endsection
@section('content')

<div class="breadcrumb-area pt-35 pb-35 bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">Product Details </li>
            </ul>
        </div>
    </div>
</div>
<div class="product-details-area pt-100 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product-details-img">
                    <div class="zoompro-border zoompro-span">
                        <img class="zoompro" src="{{ asset($product->product_image_path) }}" data-zoom-image="{{ asset($product->product_image_path) }}" alt=""/>           <span>-29%</span>
                        <div class="product-video">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=tce_Ap96b0c">
                                <i class="sli sli-control-play"></i>
                                View Video
                            </a>
                        </div>
                    </div>
                    <div id="gallery" class="mt-20 product-dec-slider">
                        <a data-image="{{ asset($product->product_image_path) }}" data-zoom-image="{{ asset($product->product_image_path) }}">
                            <img src="{{ asset($product->product_image_path) }}" alt="">
                        </a>
                        @foreach ($product->product_images as $imgPro)
                            <a data-image="{{ asset($imgPro->image_path) }}" data-zoom-image="{{ asset($imgPro->image_path) }}">
                                <img src="{{ asset($imgPro->image_path) }}" alt="">
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product-details-content ml-30">
                    <h2>{{ $product->name }}</h2>
                    <div class="product-details-price">
                        <span>{{ number_format($product->price,0,'',',') }} đ</span>
                        <span class="old">{{ number_format(($product->price + 1000000),0,'',',') }} đ</span>
                    </div>
                    <div class="pro-details-rating-wrap">
                        <div class="pro-details-rating">
                            <i class="sli sli-star yellow"></i>
                            <i class="sli sli-star yellow"></i>
                            <i class="sli sli-star yellow"></i>
                            <i class="sli sli-star yellow"></i>
                            <i class="sli sli-star yellow"></i>
                        </div>
                        <span><a href="#">3 Reviews</a></span>
                    </div>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p> --}}
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
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="pro-details-size">
                            <span>Size</span>
                            <div class="pro-details-size-content">
                                <ul>
                                    <li><a href="#">s</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">l</a></li>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">xxl</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="pro-details-quality">
                    <form action="{{ route('cart.add_cart_ajax') }}" method="post">
                        @csrf
                        <div class="cart-plus-minus">
                            <input  class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                        </div>
                        <div class="pro-details-cart btn-hover">
                            <a class="pro-add-to-cart" id-pro="{{ $product->id }}" url-temp="{{ route('cart.add_multi_to_cart') }}" href="#">Add To Cart</a>
                        </div>
                    </form>
                        <div class="pro-details-wishlist">
                            <a title="Add To Wishlist" href="#"><i class="sli sli-heart"></i></a>
                        </div>
                        <div class="pro-details-compare">
                            <a title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
                        </div>
                    </div>
                    <div class="pro-details-meta">
                        <span>Categories :</span>
                        <ul>
                            <li><a href="#">Minimal,</a></li>
                            <li><a href="#">Furniture,</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                    </div>
                    <div class="pro-details-meta">
                        <span>Tag :</span>
                        <ul>
                            <li><a href="#">Fashion, </a></li>
                            <li><a href="#">Furniture,</a></li>
                            <li><a href="#">Electronic</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="description-review-area pb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="description-review-wrapper">
                    <div class="description-review-topbar nav">
                        <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                        <a data-toggle="tab" href="#des-details3">Additional information</a>
                        <a data-toggle="tab" href="#des-details2">Reviews (3)</a>
                    </div>
                    <div class="tab-content description-review-bottom">
                        <div id="des-details1" class="tab-pane active">
                            <div class="product-description-wrapper">
                               {!! $product->content !!}
                            </div>
                        </div>
                        <div id="des-details3" class="tab-pane">
                            <div class="product-anotherinfo-wrapper">
                                <ul>
                                    <li><span>Weight</span> 400 g</li>
                                    <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                    <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                    <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                </ul>
                            </div>
                        </div>
                        <div id="des-details2" class="tab-pane">
                            <div class="review-wrapper">
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{ asset('parlo/assets/img/product-details/client-1.jpg') }}" alt="">
                                    </div>
                                    <div class="review-content">
                                        <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h4>Stella McGee</h4>
                                            </div>
                                            <div class="review-rating">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{ asset('parlo/assets/img/product-details/client-2.jpg') }}" alt="">
                                    </div>
                                    <div class="review-content">
                                        <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h4>Stella McGee</h4>
                                            </div>
                                            <div class="review-rating">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-review">
                                    <div class="review-img">
                                        <img src="{{ asset('parlo/assets/img/product-details/client-3.jpg') }}" alt="">
                                    </div>
                                    <div class="review-content">
                                        <p>“In convallis nulla et magna congue convallis. Donec eu nunc vel justo maximus posuere. Sed viverra nunc erat, a efficitur nibh”</p>
                                        <div class="review-top-wrap">
                                            <div class="review-name">
                                                <h4>Stella McGee</h4>
                                            </div>
                                            <div class="review-rating">
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ratting-form-wrapper">
                                <span>Add a Review</span>
                                <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                <div class="star-box-wrap">
                                    <div class="single-ratting-star">
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <div class="single-ratting-star">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <div class="single-ratting-star">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <div class="single-ratting-star">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                    <div class="single-ratting-star">
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                        <i class="sli sli-star"></i>
                                    </div>
                                </div>
                                <div class="ratting-form">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                    <label>Your review <span>*</span></label>
                                                    <textarea name="Your Review"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                   <label>Name <span>*</span></label>
                                                    <input type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="rating-form-style mb-20">
                                                   <label>Email <span>*</span></label>
                                                    <input type="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-submit">
                                                    <input type="submit" value="Submit">
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
            <div class="col-lg-4 col-md-4">
                <div class="pro-dec-banner">
                    <a href="#"><img src="{{ asset('parlo/assets/img/banner/banner-15.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-70">
    <div class="container">
        <div class="section-title text-center pb-60">
            <h2>Related products</h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
        </div>
        <div class="arrivals-wrap scroll-zoom">
            <div class="ht-products product-slider-active owl-carousel">
                <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="parlo/assets/img/product/product-5.jpg" alt="Universal Product Style"> </a>
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
                                <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">$60.00</span>
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
                <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="{{ asset('parlo/assets/img/product/product-6.jpg') }}" alt="Universal Product Style"> </a>
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
                                <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">$50.00</span>
                                    <span class="old">$80.00</span>
                                </div>
                                <div class="ht-product-ratting-wrap">
                                    <span class="ht-product-ratting">
                                        <span class="ht-product-user-ratting" style="width: 90%;">
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
                <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="{{ asset('parlo/assets/img/product/product-7.jpg') }}" alt="Universal Product Style"> </a>
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
                                <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">$30.00</span>
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
                <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="{{ asset('parlo/assets/img/product/product-8.jpg') }}" alt="Universal Product Style"> </a>
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
                                <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">$60.00</span>
                                    <span class="old">$90.00</span>
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
                <!--Product Start-->
                <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                    <div class="ht-product-inner">
                        <div class="ht-product-image-wrap">
                            <a href="product-details.html" class="ht-product-image"> <img src="{{ asset('parlo/assets/img/product/product-6.jpg') }}" alt="Universal Product Style"> </a>
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
                                <div class="ht-product-categories"><a href="#">Lamp </a></div>
                                <h4 class="ht-product-title"><a href="#">Demo Product Name</a></h4>
                                <div class="ht-product-price">
                                    <span class="new">$50.00</span>
                                    <span class="old">$80.00</span>
                                </div>
                                <div class="ht-product-ratting-wrap">
                                    <span class="ht-product-ratting">
                                        <span class="ht-product-user-ratting" style="width: 90%;">
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
            </div>
        </div>
    </div>
</div>


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
                                <a class="active" data-toggle="tab" href="#pro-1"><img src="{{ asset('parlo/assets/img/product/quickview-s1.jpg') }}" alt=""></a>
                                <a data-toggle="tab" href="#pro-2"><img src="{{ asset('parlo/assets/img/product/quickview-s2.jpg') }}" alt=""></a>
                                <a data-toggle="tab" href="#pro-3"><img src="{{ asset('parlo/assets/img/product/quickview-s3.jpg') }}" alt=""></a>
                                <a data-toggle="tab" href="#pro-4"><img src="{{ asset('parlo/assets/img/product/quickview-s2.jpg') }}" alt=""></a>
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
                                            <li><a href="#">s</a></li>
                                            <li><a href="#">m</a></li>
                                            <li><a href="#">l</a></li>
                                            <li><a href="#">xl</a></li>
                                            <li><a href="#">xxl</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2">
                                </div>
                                <div class="pro-details-cart">
                                    <a href="#">Add To Cart</a>
                                </div>
                                <div class="pro-details-wishlist">
                                    <a title="Add To Wishlist" href="#"><i class="sli sli-heart"></i></a>
                                </div>
                                <div class="pro-details-compare">
                                    <a title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
                                </div>
                            </div>
                            <div class="pro-details-meta">
                                <span>Categories :</span>
                                <ul>
                                    <li><a href="#">Minimal,</a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-meta">
                                <span>Tag :</span>
                                <ul>
                                    <li><a href="#">Fashion, </a></li>
                                    <li><a href="#">Furniture,</a></li>
                                    <li><a href="#">Electronic</a></li>
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
@endsection
@section('js')
<script>
    $(document).ready(function () {
                $('.pro-add-to-cart').click(function (e) {
                    e.preventDefault();
                    // swal({
                    //     title: "Good job!",
                    //     text: "You clicked the button!",
                    //     icon: "success",
                    // });
                    var pro_id = $(this).attr('id-pro');
                    var url = $(this).attr('url-temp');
                    // var qty_item = $(this).parents('#parent_1').find('.qty-item').val();
                    var qty_item = $(".cart-plus-minus-box").val();
                        // alert(qty_item);
                    console.log(qty_item);
                    $.ajax({
                        type: "post",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
                        url: url,
                        data: {
                            'pro_id':pro_id,
                            'pro_qty':qty_item
                        },
                        success: function (data) {
                            $(".top-cart-content").empty();
                            $(".top-cart-content").html(data);
                            alertify.success('Thêm vào giỏ hàng thành công !');
                            // $(".shopping-cart-content").load(location.href + " .shopping-cart-content");
                            $(".wp-cart-pc").empty();
                            $(".wp-cart-pc").load(location.href + " .wp-cart-pc");// Add space between URL and selector.

                        }
                    });
                });


            });
</script>
<script src="{{ asset('parlo/assets/js/addCart.js') }}"></script>
@endsection
