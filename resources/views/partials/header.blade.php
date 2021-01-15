
<header class="header-area sticky-bar">
    <div class="main-header-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-1 col-lg-1">
                    <div class="logo pt-40">
                        <a href="{{ route('home.index') }}">
                            <img src="{{ asset('parlo/assets/img/logo/logo.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 ">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li class="angle-shape"><a href="{{ route('home.index') }}">Home </a> </li>
                                <li class="angle-shape"><a href="#">Danh mục</a>
                                    <ul class="submenu">
                                        @foreach ($category_parents as $item)
                                            <li><a href="{{ route('category.products',['id'=>$item->id]) }}">{{ $item->name }} </a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li class="angle-shape"><a href="shop.html"> Thương hiệu <span>new</span> </a>
                                    <ul class="mega-menu">
                                        @foreach ($trademarks as $trade)
                                        <li><a class="menu-title" href="{{ route('trademark.products',['id'=>$trade->id]) }}">{{ $trade->name }}</a>
                                            <ul>
                                                @foreach ($trade->products as $key=>$item)
                                                <?php if($key ==4){break;} ?>
                                                    <li><a href="{{ route('detail.products',['slug'=>$item->slug]) }}">{{ $item->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endforeach


                                    </ul>
                                </li>
                                <li><a href="{{ asset('parlo/contact-us.html') }}"> Liên hệ </a></li>
                                <li class="angle-shape"><a href="#">Pages </a>
                                    <ul class="submenu">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart-page.html">cart page </a></li>
                                        <li><a href="{{ route('checkout.index') }}">checkout </a></li>
                                        <li><a href="compare-page.html">compare </a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="my-account.html">my account </a></li>
                                        <li><a href="contact-us.html">contact us </a></li>
                                        <li><a href="login-register.html">login/register </a></li>
                                    </ul>
                                </li>
                                @if (empty(request()->session()->get('id_customer')))
                                    <li>
                                        <a class="angle-shape" href="{{ route('login.checkout') }}"><i class="fa fa-sign-in mr-2" aria-hidden="true"></i><strong>Đăng nhập</strong></a>
                                    </li>
                                @else
                                <li class="angle-shape-1">
                                    <div class="wp-info-acc">
                                        <a href={{ route('account.customer') }}></i>Xin chào :{{request()->session()->get('username_customer')  }}</a>
                                    </div>
                                </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2">
                    <div class="header-right-wrap pt-40">
                        <div class="header-search">
                            <a class="search-active" href="#"><i class="sli sli-magnifier"></i></a>
                        </div>
                        <div class="cart-wrap wp-cart-pc">
                            <button class="icon-cart-active">
                                <span class="icon-cart">
                                    <i class="sli sli-bag"></i>
                                    <span class="count-style">
                                        <?php
                                    if(!empty(request()->session()->get('cart'))){
                                        $totalQty=0;
                                        foreach(request()->session()->get('cart')->products as $item){
                                            $totalQty += $item['quantity'];
                                        }
                                        echo $totalQty;
                                    }
                                    else{
                                        echo 0;
                                    }
                                    ?></span>
                                </span>
                                {{-- <span class="cart-price">
                                    @if(!empty(request()->session()->get('cart'))) {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }} đ @else {{ 0 }} đ @endif
                                </span> --}}
                            </button>
                            {{-- wp-cart --}}
                            <div class="shopping-cart-content">
                                @include('pages.sub_cart',['newCart'=>request()->session()->get('cart')])

                            </div>
                        </div>
                        <div class="setting-wrap">
                            <button class="setting-active">
                                <i class="sli sli-settings"></i>
                            </button>
                            <div class="setting-content">
                                <ul>
                                    <li>
                                        <h4>Currency</h4>
                                        <ul>
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">Euro</a></li>
                                            <li><a href="#">Real</a></li>
                                            <li><a href="#">BDT</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Language</h4>
                                        <ul>
                                            <li><a href="#">English (US)</a></li>
                                            <li><a href="#">English (UK)</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Account</h4>
                                        <ul>
                                            <li><a href="login-register.html">Login</a></li>
                                            <li><a href="login-register.html">Creat Account</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-search start -->
        <div class="main-search-active">
            <div class="sidebar-search-icon">
                <button class="search-close"><span class="sli sli-close"></span></button>
            </div>
            <div class="sidebar-search-input">
                <form>
                    <div class="form-search">
                        <input id="search" class="input-text" value="" placeholder="Search Now" type="search">
                        <button>
                            <i class="sli sli-magnifier"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="header-small-mobile">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo">
                        <a href="index.html">
                            <img alt="" src="{{ asset('parlo/assets/img/logo/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap">
                        <div class="cart-wrap wp-cart-mobile">
                            <button class="icon-cart-active">
                                <span class="icon-cart">
                                    <i class="sli sli-bag"></i>
                                    <span class="count-style">02</span>
                                </span>
                                <span class="cart-price">
                                    $320.00
                                </span>
                            </button>
                            <div id="card_header_load" class="shopping-cart-content">
                                <div class="shopping-cart-top">
                                    <h4>Shoping Cart</h4>
                                    <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                </div>
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ asset('parlo/assets/img/cart/cart-1.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name </a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="{{ asset('parlo/assets/img/cart/cart-2.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">Product Name</a></h4>
                                            <span>1 x 90.00</span>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-bottom">
                                    <div class="shopping-cart-total">
                                        <h4>Total : <span class="shop-total">$260.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn btn-hover text-center">
                                        <a class="default-btn" href="{{ route('checkout.index') }}">checkout</a>
                                        <a class="default-btn" href="{{ route('cart.index') }}">view cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-off-canvas">
                            <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-off-canvas-active">
    <a class="mobile-aside-close"><i class="sli sli-close"></i></a>
    <div class="header-mobile-aside-wrap">
        <div class="mobile-search">
            <form class="search-form" action="#">
                <input type="text" placeholder="Search entire store…">
                <button class="button-search"><i class="sli sli-magnifier"></i></button>
            </form>
        </div>
        <div class="mobile-menu-wrap">
            <!-- mobile menu start -->
            <div class="mobile-navigation">
                <!-- mobile menu navigation start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><a href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home version 1 </a></li>
                                <li><a href="index-2.html">Home version 2 </a></li>
                                <li><a href="index-3.html">Home version 3 </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="shop.html">shop</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                    <ul class="dropdown">
                                        <li><a href="shop.html">standard style</a></li>
                                        <li><a href="shop-grid-2-column.html">grid 2 column</a></li>
                                        <li><a href="shop-grid-4-column.html">grid 4 column</a></li>
                                        <li><a href="shop-grid-fullwide.html">grid full wide</a></li>
                                        <li><a href="shop-right-sidebar.html">grid right sidebar </a></li>
                                        <li><a href="shop-list-style1.html">list style 1</a></li>
                                        <li><a href="shop-list-style2.html">list style 2</a></li>
                                        <li><a href="shop-list-style3.html">list style 3</a></li>
                                        <li><a href="shop-list-fullwide.html">list full wide</a></li>
                                        <li><a href="shop-list-sidebar.html">list with sidebar </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">products details</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">tab style 1</a></li>
                                        <li><a href="product-details-tab-2.html">tab style 2</a></li>
                                        <li><a href="product-details-tab-3.html">tab style 3</a></li>
                                        <li><a href="product-details-gallery.html">gallery style  </a></li>
                                        <li><a href="product-details-gallery-right.html">gallery right</a></li>
                                        <li><a href="product-details-sticky.html">sticky style</a></li>
                                        <li><a href="product-details-sticky-right.html">sticky right</a></li>
                                        <li><a href="product-details-slider-box.html">slider style</a></li>
                                        <li><a href="product-details-affiliate.html">Affiliate style</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Accessories </a></li>
                        <li class="menu-item-has-children"><a href="#">pages</a>
                            <ul class="dropdown">
                                <li><a href="about-us.html">about us </a></li>
                                <li><a href="cart-page.html">cart page </a></li>
                                <li><a href="checkout.html">checkout </a></li>
                                <li><a href="compare-page.html">compare </a></li>
                                <li><a href="wishlist.html">wishlist </a></li>
                                <li><a href="my-account.html">my account </a></li>
                                <li><a href="contact-us.html">contact us </a></li>
                                <li><a href="login-register.html">login/register </a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children "><a href="blog.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog.html">standard style </a></li>
                                <li><a href="blog-2-col.html">blog 2 column </a></li>
                                <li><a href="blog-3-col.html">blog 3 column </a></li>
                                <li><a href="blog-right-sidebar.html">blog right sidebar </a></li>
                                <li><a href="blog-details.html">blog details </a></li>
                                <li><a href="blog-details-right-sidebar.html">blog details right sidebar </a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">Contact us</a></li>
                    </ul>
                </nav>
                <!-- mobile menu navigation end -->
            </div>
            <!-- mobile menu end -->
        </div>
        <div class="mobile-curr-lang-wrap">
            <div class="single-mobile-curr-lang">
                <a class="mobile-language-active" href="#">Language <i class="sli sli-arrow-down"></i></a>
                <div class="lang-curr-dropdown lang-dropdown-active">
                    <ul>
                        <li><a href="#">English (US)</a></li>
                        <li><a href="#">English (UK)</a></li>
                        <li><a href="#">Spanish</a></li>
                    </ul>
                </div>
            </div>
            <div class="single-mobile-curr-lang">
                <a class="mobile-currency-active" href="#">Currency <i class="sli sli-arrow-down"></i></a>
                <div class="lang-curr-dropdown curr-dropdown-active">
                    <ul>
                        <li><a href="#">USD</a></li>
                        <li><a href="#">EUR</a></li>
                        <li><a href="#">Real</a></li>
                        <li><a href="#">BDT</a></li>
                    </ul>
                </div>
            </div>
            <div class="single-mobile-curr-lang">
                <a class="mobile-account-active" href="#">My Account <i class="sli sli-arrow-down"></i></a>
                <div class="lang-curr-dropdown account-dropdown-active">
                    <ul>
                        <li><a href="login-register.html">Login</a></li>
                        <li><a href="login-register.html">Creat Account</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile-social-wrap">
            <a class="facebook" href="#"><i class="sli sli-social-facebook"></i></a>
            <a class="twitter" href="#"><i class="sli sli-social-twitter"></i></a>
            <a class="pinterest" href="#"><i class="sli sli-social-pinterest"></i></a>
            <a class="instagram" href="#"><i class="sli sli-social-instagram"></i></a>
            <a class="google" href="#"><i class="sli sli-social-google"></i></a>
        </div>
    </div>
</div>
