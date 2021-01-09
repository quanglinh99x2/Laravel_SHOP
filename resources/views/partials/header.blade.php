<!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-sm-4 hidden-xs">
              <!-- Default Welcome Message -->
              <div class="welcome-msg ">Welcome to MyStore! </div>
              <span class="phone hidden-sm">Call Us: +123.456.789</span> </div>

            <!-- top links -->
            <div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.html"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.html"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a></div>
                <div class="blog"><a title="Blog" href="blog.html"><i class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
                <div class="login"><a href="account_page.html"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a></div>
              </div>
              <div class="language-currency-wrapper">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <img src="quanglinhstore/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a class="selected" href="#"> <img src="quanglinhstore/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                      <li> <a href="#"> <img src="quanglinhstore/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                      <li> <a href="#"> <img src="quanglinhstore/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                      <li> <a href="#"> <img src="quanglinhstore/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                      <li> <a href="#"> <img src="quanglinhstore/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                      <li> <a href="#"> <img src="quanglinhstore/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>

                <!-- End Default Welcome Message -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-md-3 col-xs-12">
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="{{ route('home.index') }}"><img alt="responsive theme logo" src="{{ asset('quanglinhstore/images/4canh.png') }}"></a> </div>
            <!-- End Header Logo -->
          </div>
          <div class="col-xs-9 col-sm-6 col-md-6">
            <!-- Search -->

            <div class="top-search">
              <div id="search">
                <form>
                  <div class="input-group">
                    <select class="cate-dropdown hidden-xs" name="category_id">
                      <option>All Categories</option>
                      <option>women</option>
                      <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                      <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                      <option>&nbsp;&nbsp;&nbsp;Top</option>
                      <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                      <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                      <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                      <option>Men</option>
                      <option>Electronics</option>
                      <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                      <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                    </select>
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                  </div>
                </form>
              </div>
            </div>

            <!-- End Search -->
          </div>
          <!-- top cart -->

          <div class="col-lg-3 col-xs-3 top-cart">
            <div class="top-cart-contain">
              <div class="mini-cart">
                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#">
                  <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                  <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Shopping Cart</span> <span class="cart-total">4 Item(s): $520.00</span></div>
                  </a></div>
                <div>
                  <div class="top-cart-content">
                    <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                    <ul id="cart-sidebar" class="mini-products-list">
                      <li class="item odd"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="quanglinhstore/images/products/img07.jpg" alt="html template" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">Lorem ipsum dolor sit amet Consectetur</a> </p>
                          <strong>1</strong> x <span class="price">$20.00</span> </div>
                      </li>
                      <li class="item even"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="quanglinhstore/images/products/img11.jpg" alt="html template" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">Consectetur utes anet adipisicing elit</a> </p>
                          <strong>1</strong> x <span class="price">$230.00</span> </div>
                      </li>
                      <li class="item last odd"> <a href="shopping_cart.html" title="Ipsums Dolors Untra" class="product-image"><img src="quanglinhstore/images/products/img10.jpg" alt="html template" width="65"></a>
                        <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                          <p class="product-name"><a href="shopping_cart.html">Sed do eiusmod tempor incidist</a> </p>
                          <strong>2</strong> x <span class="price">$420.00</span> </div>
                      </li>
                    </ul>
                    <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                    <div class="actions">
                      <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                      <button class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header -->
       <!-- Navbar -->
       <nav>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-4">
              <div class="mm-toggle-wrap">
                <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
                <span class="mm-label">Categories</span> </div>
              <div class="mega-container visible-lg visible-md visible-sm">
               @include('partials.category_header',['category_parents'=>$category_parents,'trademarks'=>$trademarks])
              </div>
            </div>
            <div class="col-md-9 col-sm-8">
              <div class="mtmegamenu">
                <ul>
                  <li class="mt-root demo_custom_link_cms">
                    <div class="mt-root-item"><a href="{{ route('home.index') }}">
                      <div class="title title_font"><span class="title-text">Home</span></div>
                      </a></div>
                    <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="index.html"><span>Home Version 1</span></a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="Version2/index.html"><span>Home Version 2</span></a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="Version3/index.html"><span>Home Version 3</span></a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="Version4/index.html"><span>Home Version 4</span></a></div>
                      </li>
                       <li class="menu-item depth-1">
                        <div class="title"> <a href="Version5/index.html"><span>Home Version 5</span></a></div>
                      </li>
                       <li class="menu-item depth-1">
                        <div class="title"> <a href="rtl-version/index.html"><span>RTL Version</span></a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="rtl-version1/index.html"><span>Home Version 1 RTL</span></a></div>
                      </li>

                    </ul>
                  </li>
                  <li class="mt-root demo_custom_link_cms">
                    <div class="mt-root-item"><a href="#">
                      <div class="title title_font"><span class="title-text">Danh mục sản phẩm</span></div>
                      </a></div>
                    <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                        @foreach ($category_parents as $category_parent)
                            <li class="menu-item depth-1">
                                <div class="title"> <a href="{{ route('category.products',['id'=>$category_parent->id]) }}"><span>{{ $category_parent->name }}</span></a></div>
                          </li>
                        @endforeach



                    </ul>
                    {{-- Thương hiệu  --}}
                    <li class="mt-root demo_custom_link_cms">
                        <div class="mt-root-item"><a href="#">
                          <div class="title title_font"><span class="title-text">Thương hiệu</span></div>
                          </a></div>
                        <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                            @foreach ($trademarks as $trademark)
                                <li class="menu-item depth-1">
                                    <div class="title"> <a href="{{ route('trademark.products',['id'=>$trademark->id]) }}"><span>{{ $trademark->name }}</span></a></div>
                              </li>
                            @endforeach
                        </ul>
                  </li>
                  <li class="mt-root">
                    <div class="mt-root-item"><a href="#">
                      <div class="title title_font"><span class="title-text">Page</span></div>
                      </a></div>
                    <ul class="menu-items col-xs-12">
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Shop Pages </a></div>
                        <ul class="submenu">
                          <li class="menu-item">
                            <div class="title"> <a href="shop_grid.html"> Shop grid </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="shop_grid_right_sidebar.html"> Shop grid right sidebar</a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="shop_list.html"> Shop list </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="shop_list_right_sidebar.html"> Shop list right sidebar</a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="shop_grid_full_width.html"> Shop grid full width </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Ecommerce Pages </a></div>
                        <ul class="submenu">
                          <li class="menu-item">
                            <div class="title"> <a href="wishlist.html"> Wishlists </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="checkout.html"> Checkout </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="compare.html"> Compare </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="shopping_cart.html"> Shopping cart </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="quick_view.html"> Quick View </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Static Pages </a></div>
                        <ul class="submenu">
                          <li class="menu-item depth-2 category ">
                            <div class="title"> <a href="account_page.html"> Create Account Page </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="about_us.html"> About Us </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="contact_us.html"> Contact us </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="404error.html"> Error 404 </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="faq.html"> FAQ </a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Product Categories </a></div>
                        <ul class="submenu">
                          <li class="menu-item">
                            <div class="title"> <a href="cat-3-col.html"> 3 Column Sidebar </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="cat-4-col.html"> 4 Column Sidebar</a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="cat-4-col-full.html"> 4 Column Full width </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="cat-6-col.html"> 6 Columns Full width</a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Single Product Pages </a></div>
                        <ul class="submenu">
                          <li class="menu-item">
                            <div class="title"> <a href="single_product.html"> single product </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="single_product_left_sidebar.html"> single product left sidebar</a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="single_product_right_sidebar.html"> single product right sidebar</a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="single_product_magnify_zoom.html"> single product magnify zoom</a></div>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item depth-1 menucol-1-3 ">
                        <div class="title title_font"> <a href="#"> Blog Pages </a></div>
                        <ul class="submenu">
                          <li class="menu-item">
                            <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                          </li>
                          <li class="menu-item">
                            <div class="title"> <a href="single_post.html"> Single post </a></div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li class="mt-root">
                    <div class="mt-root-item"><a href="about_us.html">
                      <div class="title title_font"><span class="title-text">about us</span></div>
                      </a></div>
                  </li>
                  <li class="mt-root demo_custom_link_cms">
                    <div class="mt-root-item"><a href="blog.html">
                      <div class="title title_font"><span class="title-text">Blog</span></div>
                      </a></div>
                    <ul class="menu-items col-md-3 col-sm-4 col-xs-12">
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="blog_right_sidebar.html"> Blog – Right Sidebar </a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="blog_left_sidebar.html"> Blog – Left Sidebar </a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="blog_full_width.html"> Blog – Full-Width </a></div>
                      </li>
                      <li class="menu-item depth-1">
                        <div class="title"> <a href="single_post.html"> Single post </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="mt-root">
                    <div class="mt-root-item">
                      <div class="title title_font"><span class="title-text">Best Seller</span></div>
                    </div>
                    <ul class="menu-items col-xs-12">
                      <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="quanglinhstore/images/products/img06.jpg" alt="html template"> <img class="hover-img" src="quanglinhstore/images/products/img06.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="quanglinhstore/images/products/img02.jpg" alt="html template"> <img class="hover-img" src="quanglinhstore/images/products/img02.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="menu-item depth-1 product menucol-1-3 withimage">
                        <div class="product-item">
                          <div class="item-inner">
                            <div class="icon-sale-label sale-left">Sale</div>
                            <div class="icon-new-label new-right">New</div>
                            <div class="product-thumbnail">
                              <div class="icon-sale-label sale-left">Sale</div>
                              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="single_product.html">
                                <figure> <img class="first-img" src="quanglinhstore/images/products/img03.jpg" alt="html template"> <img class="hover-img" src="quanglinhstore/images/products/img03.jpg" alt="html template"></figure>
                                </a>
                                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                              </div>
                              <div class="pr-info-area">
                                <div class="pr-button">
                                  <div class="mt-button add_to_wishlist"> <a href="wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                  <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                  <div class="mt-button quick-view"> <a href="quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                </div>
                              </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html">Ipsums Dolors Untra </a> </div>
                                <div class="item-content">
                                  <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                  <div class="item-price">
                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <!-- end nav -->
