<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    <form action="#">
        <div class="table-content table-responsive cart-table-content">
            <table>
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty(request()->session()->get('cart')))
                        @foreach (request()->session()->get('cart')->products  as $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="{{ asset($item['productInfo']['product_image_path']) }}" alt=""></a>
                                </td>
                                <td class="product-name"><a href="#">{{ $item['productInfo']['name'] }}</a></td>
                                <td class="product-price-cart"><span class="amount">{{ number_format($item['productInfo']['price'],0,'',',') }} đ</span></td>
                                <td class="product-quantity">
                                    <div class="cart-plus-minus">
                                        {{-- <input class="cart-plus-minus-box" type="text" name="qtybutton" value="2"> --}}
                                        <input url-temp="{{ route('cart.update_product') }}" id-pro="{{  $item['productInfo']['id'] }}"  class="cart-plus-minus-box input-sm" min=1 max = 10 type="number" value="{{ $item['quantity'] }}">
                                    </div>
                                </td>
                                <td class="product-subtotal">{{ number_format($item['price'],0,'',',') }} đ</td>
                                <td class="product-remove">
                                    <a href="#"><i class="sli sli-pencil"></i></a>
                                    <a url-temp="{{ route('cart.delete_item_on') }}" id-pro="{{  $item['productInfo']['id'] }}" class="remove_item" href="#"><i class="sli sli-close"></i></a>
                            </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-shiping-update-wrapper">
                    <div class="cart-shiping-update">
                        <a href="{{ route('cart.index') }}">Continue Shopping</a>
                    </div>
                    <div class="cart-clear">
                        <a href="{{ route('cart.index') }}">Cập nhật giỏ hàng</a>
                        <a href="{{ route('cart.destroy') }}">Xóa tất cả giỏ hàng</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="cart-tax">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gray">Estimate Shipping And Tax</h4>
                </div>
                <div class="tax-wrapper">
                    <p>Enter your destination to get a shipping estimate.</p>
                    <div class="tax-select-wrapper">
                        <div class="tax-select">
                            <label>
                                * Country
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select">
                            <label>
                                * Region / State
                            </label>
                            <select class="email s-email s-wid">
                                <option>Bangladesh</option>
                                <option>Albania</option>
                                <option>Åland Islands</option>
                                <option>Afghanistan</option>
                                <option>Belgium</option>
                            </select>
                        </div>
                        <div class="tax-select">
                            <label>
                                * Zip/Postal Code
                            </label>
                            <input type="text">
                        </div>
                        <button class="cart-btn-2" type="submit">Get A Quote</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="discount-code-wrapper">
                <div class="title-wrap">
                   <h4 class="cart-bottom-title section-bg-gray">Use Coupon Code</h4>
                </div>
                <div class="discount-code">
                    <p>Enter your coupon code if you have one.</p>
                    <form>
                        <input type="text" required="" name="name">
                        <button class="cart-btn-2" type="submit">Apply Coupon</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="grand-totall">
                <div class="title-wrap">
                    <h4 class="cart-bottom-title section-bg-gary-cart">Cart Total</h4>
                </div>
                <h5>Total products <span>@if (!empty(request()->session()->get('cart')))
                    {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }}
                  @endif đ</span></h5>
                <div class="total-shipping">
                    <h5>Total shipping</h5>
                    <ul>
                        <li><input type="checkbox"> Standard <span>$20.00</span></li>
                        <li><input type="checkbox"> Express <span>$30.00</span></li>
                    </ul>
                </div>
                <h4 class="grand-totall-title">Tổng tiền  <span>@if (!empty(request()->session()->get('cart')))
                    {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }}
                  @endif đ</span></h4>
                <a href="
                @if(empty(request()->session()->get('id_customer')))
                    {{ route('login.checkout') }}
                @else
                   {{ route('checkout.index') }}
                @endif">Thanh toán</a>
            </div>
        </div>
    </div>
</div>
