@extends('layouts.index')
@section('title')
    <title>Danh mục {{ $trademark->name }}</title>
@endsection

<!-- Breadcrumbs -->
@section('content')
<div class="breadcrumb-area pt-35 pb-35 bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li class="active">{{ $trademark->name }} </li>
            </ul>
        </div>
    </div>
</div>
<div class="shop-area pt-95 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="shop-top-bar">
                    <div class="select-shoing-wrap">
                        <div class="shop-select">
                            <select>
                                <option value="">Sort by newness</option>
                                <option value="">A to Z</option>
                                <option value=""> Z to A</option>
                                <option value="">In stock</option>
                            </select>
                        </div>
                        <p>Showing 1–12 of 20 result</p>
                    </div>
                    <div class="shop-tab nav">
                        <a class="active" href="#shop-1" data-toggle="tab">
                            <i class="sli sli-grid"></i>
                        </a>
                        <a href="#shop-2" data-toggle="tab">
                            <i class="sli sli-menu"></i>
                        </a>
                    </div>
                </div>
                <div class="shop-bottom-area mt-35">
                    <div class="tab-content jump">
                        <div id="shop-1" class="tab-pane active">
                            <div class="row ht-products">

                                @foreach ($trademark->products as $item)
                                <div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
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
                                                        <li><a data-id="{{ $item->id }}" url-temp="{{ route('cart.add_cart_ajax') }}" class="add-to-cart-mt" href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="ht-product-content">
                                                <div class="ht-product-content-inner">
                                                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                                                    <h4 class="ht-product-title"><a href="{{ route('detail.products',['slug'=>$item->slug]) }}">{{ $item->name }}</a></h4>
                                                    <div class="ht-product-price">
                                                        <span class="new">{{ number_format($item->price,0,'',',') }}</span>
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
                                </div>
                                @endforeach
                            </div>
                            <div class="pro-pagination-style text-center mt-30">

                                <ul>
                                    <li><a class="prev" href="#"><i class="sli sli-arrow-left"></i></a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a class="next" href="#"><i class="sli sli-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-style mr-30">
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Search </h4>
                        <div class="pro-sidebar-search mb-50 mt-25">
                            <form class="pro-sidebar-search-form" action="#">
                                <input type="text" placeholder="Search here...">
                                <button>
                                    <i class="sli sli-magnifier"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Refine By </h4>
                        <div class="sidebar-widget-list mt-30">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox"> <a href="#">On Sale <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">New <span>5</span></a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">In Stock <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-45">
                        <h4 class="pro-sidebar-title">Filter By Price </h4>
                        <div class="price-filter mt-10">
                            <div class="price-slider-amount">
                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                            </div>
                            <div id="slider-range"></div>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-50">
                        <h4 class="pro-sidebar-title">Colour </h4>
                        <div class="sidebar-widget-list mt-20">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Green <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Cream <span>8</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Blue <span>9</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">Black <span>3</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-40">
                        <h4 class="pro-sidebar-title">Size </h4>
                        <div class="sidebar-widget-list mt-20">
                            <ul>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XL <span>4</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">L <span>5</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">SM <span>6</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-widget-list-left">
                                        <input type="checkbox" value=""> <a href="#">XXL <span>7</span> </a>
                                        <span class="checkmark"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget mt-50">
                        <h4 class="pro-sidebar-title">Tag </h4>
                        <div class="sidebar-widget-tag mt-25">
                            <ul>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">For Men</a></li>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Fashion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

    <script src="{{ asset('parlo/assets/js/addCart.js') }}"></script>
@endsection
