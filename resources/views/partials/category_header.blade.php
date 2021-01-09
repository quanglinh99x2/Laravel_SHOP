

<div class="navleft-container">
    <div class="mega-menu-title">
      <h3>Categories</h3>
    </div>
    <div class="mega-menu-category">
      <ul class="nav">
        <li> <a href="#"><i class="icon fa fa-camera fa-fw"></i> Camera & Photo</a>
          <div class="wrap-popup">
            <div class="popup">
              <div class="row">
                <div class="col-md-4 col-sm-6">
                  <ul class="nav">
                    <li><a href="shop_grid.html"><span>Canon</span></a></li>
                    <li><a href="shop_grid.html"><span>Nikon</span></a></li>
                    <li><a href="shop_grid.html"><span>Olympus</span> </a></li>
                    <li><a href="shop_grid.html"><span>ALPA</span> </a></li>
                    <li> <a href="shop_grid.html"><span>Bolex</span></a></li>
                    <li><a href="shop_grid.html"><span>Samsung </span></a></li>
                    <li><a href="shop_grid.html"><span>Panasonic</span></a></li>
                    <li><a href="shop_grid.html"><span>Thomson </span></a></li>
                    <li><a href="shop_grid.html"><span>Bell & Howell</span></a></li>
                  </ul>
                </div>
                <div class="col-md-4 col-sm-6 has-sep">
                  <ul class="nav">
                    <li><a href="shop_grid.html"><span>Digital camera</span></a></li>
                    <li><a href="shop_grid.html"><span>High-speed</span></a></li>
                    <li><a href="shop_grid.html"><span>Camera phone</span> </a></li>
                    <li><a href="shop_grid.html"><span>Multiplane</span> </a></li>
                    <li> <a href="shop_grid.html"><span>Pocket camera</span></a></li>
                    <li><a href="shop_grid.html"><span>Video camera</span></a></li>
                    <li><a href="shop_grid.html"><span>Zenith camera</span></a></li>
                    <li><a href="shop_grid.html"><span>Single-lens reflex</span></a></li>
                    <li><a href="shop_grid.html"><span>Light-field</span></a></li>
                  </ul>
                </div>
                <div class="col-md-4 has-sep hidden-sm">
                  <div class="custom-menu-right">
                    <div class="box-banner menu-banner">
                      <div class="add-right"><a href="#"><img src="quanglinhstore/images/menu-img4.jpg" alt="html template"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <?php $i=1; ?>
        <li> <a href="#"><i class="icon fa fa-mobile fa-fw"></i>Điện thoại</a>
          <div class="wrap-popup">
            <div class="popup">
              <div class="row">

                @foreach ($trademarks as $key=>$trademark)
                <?php

                   if($i == 1){
                        echo "<div class='col-md-4 col-sm-6'>";
                            ?>
                             <h3>{{ $trademark->name }}</h3>
                             <ul class="nav">
                                 @foreach ($trademark->products()->limit(5)->get() as $item)
                                     <li><a href="shop_grid.html">{{ $item->name }}</a></li>
                                 @endforeach
                             </ul>
                             <br>
                   <?php
                   }
                    if($i %2 ==0){
                    ?>
                            <h3>{{ $trademark->name }}</h3>
                            <ul class="nav">
                                @foreach ($trademark->products()->limit(5)->get() as $item)
                                    <li><a href="shop_grid.html">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                            <br>

                        </div>
                <?php
                    }
                    if($i != 1 && $i%2 != 0){
                        echo "<div class='col-md-4 col-sm-6 has-sep'>";
                        ?>
                            <h3>{{ $trademark->name }}</h3>
                            <ul class="nav">
                                @foreach ($trademark->products()->limit(5)->get() as $item)
                                    <li><a href="shop_grid.html">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                            <br>

                            @if ($key === count($trademarks)-1 )
                                <?php echo "</div>" ?>
                            @endif
                        <?php
                    }
                    $i++;
                ?>
                {{-- <div class="col-md-4 col-sm-6"> --}}


                @endforeach

                {{-- <div class="col-md-4 col-sm-6 has-sep">
                  <h3>Apple</h3>
                  <ul class="nav">
                    <li> <a href="shop_grid.html">Apple Macbook Pro</a> </li>
                    <li> <a href="shop_grid.html">Newest Apple Macbook Pro</a> </li>
                    <li> <a href="shop_grid.html">Retina Display Laptop</a> </li>
                    <li> <a href="shop_grid.html">Silicone Keyboard</a> </li>
                  </ul>
                  <br>
                  <h3>Lenovo</h3>
                  <ul class="nav">
                    <li> <a href="shop_grid.html">Lenovo Yoga 300</a> </li>
                    <li> <a href="shop_grid.html">Lenovo IdeaPad</a> </li>
                    <li> <a href="shop_grid.html">Tab 3 A710F Tablet</a> </li>
                    <li> <a href="shop_grid.html">Channel Speakers</a> </li>
                    <li> <a href="shop_grid.html">Accessories</a> </li>
                  </ul>
                </div> --}}
                <div class="col-md-4 has-sep hidden-sm">
                  <div class="custom-menu-right">
                    <div class="box-banner media">
                      <div class="add-desc">
                        <h3>Computer <br>
                          Services </h3>
                        <div class="price-sale">2016</div>
                        <a href="#">Shop Now</a> </div>
                      <div class="add-right"><a href="#"><img src="quanglinhstore/images/menu-img1.jpg" alt="html template"></a></div>
                    </div>
                    <div class="box-banner media">
                      <div class="add-desc">
                        <h3>Save up to</h3>
                        <div class="price-sale">75 <sup>%</sup><sub>off</sub></div>
                        <a href="#">Shopping Now</a> </div>
                      <div class="add-right"><a href="#"><img src="quanglinhstore/images/menu-img2.jpg" alt="html template"></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li> <a href="shop_grid.html"><i class="icon fa fa-apple fa-fw"></i> Apple Store</a>
          <div class="wrap-popup column2">
            <div class="popup">
              <div class="row">
                <div class="col-sm-6">
                  <h3>iPhone</h3>
                  <ul class="nav">
                    <li> <a href="shop_grid.html"> iPhone SE </a> </li>
                    <li> <a href="shop_grid-2.html"> iPhone 6s Plus </a> </li>
                    <li> <a href="shop_grid.html"> iPhone 3G </a> </li>
                    <li> <a href="shop_grid.html"> iPad Pro </a> </li>
                  </ul>
                </div>
                <div class="col-sm-6 has-sep">
                  <h3> Watch </h3>
                  <ul class="nav">
                    <li> <a href="shop_grid.html"> Quartz Watches </a> </li>
                    <li> <a href="shop_grid.html"> Lover's Watches</a> </li>
                    <li> <a href="shop_grid.html"> Digital Watches </a> </li>
                    <li> <a href="shop_grid.html"> Sport Watch </a> </li>
                  </ul>
                </div>
                <div class="col-sm-12"> <a class="ads1" href="#"><img class="img-responsive" src="quanglinhstore/images/menu-img3.jpg" alt="html template"></a> </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nosub"><a href="#"><i class="icon fa fa-location-arrow fa-fw"></i> Car Electronic</a></li>
        <li> <a href="shop_grid.html"><i class="icon fa fa-headphones fa-fw"></i> Headphones</a>
          <div class="wrap-popup column1">
            <div class="popup">
              <ul class="nav">
                <li><a href="shop_grid.html"><span>Envent Stereo</span></a></li>
                <li><a href="shop_grid.html"><span>Sennheiser</span></a></li>
                <li><a href="shop_grid.html"><span>Philips</span></a></li>
                <li><a href="shop_grid.html"><span>Sony</span></a></li>
                <li><a href="shop_grid.html"><span>Avantree</span></a></li>
                <li><a href="shop_grid.html"><span>Bajaao</span></a></li>
                <li><a href="shop_grid.html"><span>FiiO</span></a></li>
                <li><a href="shop_grid.html"><span>Audio-Technica</span></a></li>
                <li><a href="shop_grid.html"><span>LUXA2</span></a></li>
                <li><a href="shop_grid.html"><span>Geekria</span></a></li>
              </ul>
            </div>
          </div>
        </li>
        <li><a href="#"><i class="icon fa fa-microphone fa-fw"></i> Accessories</a>
          <div class="wrap-popup column1">
            <div class="popup">
              <ul class="nav">
                <li> <a href="shop_grid.html"> Vacuum Cleaner </a> </li>
                <li> <a href="shop_grid.html"> Memore Bluetooth</a> </li>
                <li> <a href="shop_grid.html"> On-Ear Headphones </a> </li>
                <li> <a href="shop_grid.html"> Digital MP3 Player </a> </li>
              </ul>
            </div>
          </div>
        </li>
        <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-gamepad fa-fw"></i> Game &amp; Video</a></li>
        <li class="nosub"><a href="shop_grid.html"><i class="glyphicon glyphicon-time"></i> Watches</a></li>
        <li class="nosub"><a href="shop_grid.html"><i class="icon fa fa-lightbulb-o fa-fw"></i> Lights &amp; Lighting</a></li>
      </ul>
    </div>
  </div>
