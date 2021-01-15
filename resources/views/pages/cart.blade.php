@extends('layouts.index')
@section('title')
<title>Giỏ hàng</title>
@endsection
@section('css')
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('quanglinhstore/css/flexslider.css') }}" > --}}
@endsection
@section('content')
     <!-- Main Container -->
     <div class="breadcrumb-area pt-35 pb-35 bg-gray">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <ul>
                    <li>
                        <a href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cart-main-area pt-95 pb-100">
        <div class="container">
            <h3 class="cart-page-title">Danh sách sản phẩm</h3>
            <div class="row wp-page-cart">
                @include('partials.list_product_cart_item')
            </div>
        </div>
    </div>
@endsection
@section('js')
<script src="{{ asset('parlo/assets/js/addCart.js') }}"></script>
@endsection

