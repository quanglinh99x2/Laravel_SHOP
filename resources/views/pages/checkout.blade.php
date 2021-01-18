@extends('layouts.index')
@section('title')
<title>Thanh toán</title>
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
                <li class="active">Checkout </li>
            </ul>
        </div>
    </div>
</div>
<!-- compare main wrapper start -->
<div class="checkout-main-area pt-70 pb-70">
    <div class="container">
        {{-- <div class="customer-zone mb-20">
            <p class="cart-page-title">Returning customer? <a class="checkout-click1" href="#">Click here to login</a></p>
            <div class="checkout-login-info">
                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Username or email address <span>*</span></label>
                                <input type="text" name="user-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="sin-checkout-login">
                                <label>Passwords <span>*</span></label>
                                <input type="password" name="user-password">
                            </div>
                        </div>
                    </div>
                    <div class="button-remember-wrap">
                        <button class="button" type="submit">Login</button>
                        <div class="checkout-login-toggle-btn">
                            <input type="checkbox">
                            <label>Remember me</label>
                        </div>
                    </div>
                    <div class="lost-password">
                        <a href="#">Lost your password?</a>
                    </div>
                </form>
                <div class="checkout-login-social">
                    <span>Login with:</span>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Google</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div class="customer-zone mb-20">
            <p class="cart-page-title">Bạn có một mã giảm giá? <a class="checkout-click3" href="#">Nhập mã vào đây !</a></p>
            <div class="checkout-login-info3">
                <form action="#">
                    <input type="text" placeholder="Coupon code">
                    <input type="submit" value="Nhập mã">
                </form>
            </div>
        </div>
        <form action="{{ route('post.order') }}" method="post">
        <div class="checkout-wrap pt-30">
            <div class="row">
                <div class="col-lg-7">
                    <div class="billing-info-wrap mr-50">
                        <h3>Chi tiết thanh toán (Billing Details)</h3>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Họ và tên <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" value="{{ $user->fullname }}" name ="fullname">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20">
                                    <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                                    <input type="number" value="{{ $user->phone }}" name ="phone">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20">
                                    <label>Địa chỉ giao hàng  <abbr class="required" title="required">*</abbr></label>
                                    <textarea rows="6" placeholder="Nhập địa chỉ giao hàng" name="address"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="billing-info mb-20">
                                    <label>Địa chỉ Email <abbr class="required" title="required">*</abbr></label>
                                    <input type="email" name="email" value="{{ $user->email }}">
                                </div>
                            </div>
                        </div>

                        {{-- <div class="different-address open-toggle mt-30">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>First Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Last Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Company Name</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20">
                                        <label>Country</label>
                                        <select>
                                            <option>Select a country</option>
                                            <option>Azerbaijan</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Street Address</label>
                                        <input class="billing-address" placeholder="House number and street name" type="text">
                                        <input placeholder="Apartment, suite, unit etc." type="text">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20">
                                        <label>Town / City</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>State / County</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Postcode / ZIP</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Phone</label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20">
                                        <label>Email Address</label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="additional-info-wrap">
                            <label>Ghi chú</label>
                            <textarea rows="6" placeholder="Nhập ghi chú thông tin đơn hàng" name="note"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="your-order-area">
                        <h3>Sản phẩm order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-info-wrap">
                                <div class="your-order-info">
                                    <ul>
                                        <li>Sản phẩm <span>Tổng tiền</span></li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @foreach (request()->session()->get('cart')->products as $item)
                                            <li>{{ $item['productInfo']['name'] }}  X  {{ $item['quantity'] }} <span>{{ number_format(($item['productInfo']['price'] * $item['quantity']),'0','',',' ) }} đ</span></li>
                                        @endforeach

                                        {{-- <li>Product Name  X  1 <span>$329 </span></li> --}}
                                    </ul>
                                </div>
                                <div class="your-order-info order-subtotal">
                                    <ul>
                                        <li>Thành tiền<span>@if(!empty(request()->session()->get('cart'))) {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }} đ @endif </span></li>
                                    </ul>
                                </div>
                                <div class="your-order-info order-shipping">
                                    <ul>
                                        <li>Phí ship <p>0 đ <br>costs. </p></li>
                                    </ul>
                                </div>
                                <div class="your-order-info order-total">
                                    <ul>
                                        <li>Tổng tiền <span>@if(!empty(request()->session()->get('cart'))) {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }} đ @endif</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="pay-top sin-payment">
                                    <input id="payment_method_1" class="input-radio" type="radio" value="1" checked="checked" name="payment_method">
                                    <label for="payment_method_1">Chuyển khoản trực tiếp(Direct Bank Transfer) </label>
                                    <div class="payment-box payment_method_bacs">
                                    {{-- <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p> --}}
                                    </div>
                                </div>
                                {{-- <div class="pay-top sin-payment">
                                    <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-2">Check payments</label>
                                    <div class="payment-box payment_method_bacs">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div> --}}
                                <div class="pay-top sin-payment">
                                    <input id="payment-method-3" class="input-radio" type="radio" value="2" name="payment_method">
                                    <label for="payment-method-3">Thanh toán khi nhận hàng (Cash on delivery) </label>
                                    <div class="payment-box payment_method_bacs">
                                    {{-- <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p> --}}
                                    </div>
                                </div>
                                {{-- <div class="pay-top sin-payment sin-payment-3">
                                    <input id="payment-method-4" class="input-radio" type="radio" value="cheque" name="payment_method">
                                    <label for="payment-method-4">PayPal <img alt="" src="assets/img/icon-img/payment.png"><a href="#">What is PayPal?</a></label>
                                    <div class="payment-box payment_method_bacs">
                                    <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="Place-order mt-40">
                            <button type="submit">Đặt hàng</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('parlo/assets/js/addCart.js') }}"></script>
@endsection
