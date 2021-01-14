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
<script>
    $(document).ready(function () {
    $(".inc").remove();
    $(".dec").remove();
    $(document).on("click",".remove_item",function (e) {
        e.preventDefault();
        var pro_id_delete = $(this).attr('id-pro');
        var url = $(this).attr('url-temp');
        // alert(url);
        $.ajax({
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
            url: url,
            data: {
                'pro_id_delete':pro_id_delete,
            },
            success: function (data) {
                $(".wp-page-cart").empty();
                $(".wp-page-cart").html(data);
                // oQuickReply.swap('card_header_load');
                alertify.success('Xóa sản phẩm khỏi giỏ hàng thành công !');
                $(".wp-cart-pc").empty();
                $(".wp-cart-pc").load(location.href + " .wp-cart-pc");// Add space between URL and selector.
            }
        });
    });
    $(document).on("change",".input-sm",function (e) {
        e.preventDefault();
        var pro_id = $(this).attr('id-pro');
        var url = $(this).attr('url-temp');
        var qty_item = $(this).val(); // lấy phần tử cùng cấp có class .input-sm
        // alert(qty_item);
        $.ajax({
            type: "post",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'), '_method': 'patch'},
            url: url,
            data: {
                'pro_id':pro_id,
                'pro_qty':qty_item
            },
            success: function (data) {
                $(".wp-page-cart").empty();
                $(".wp-page-cart").html(data);

                alertify.success('Cập nhật giỏ hàng thành công !');
                $(".wp-cart-pc").empty();
                $(".wp-cart-pc").load(location.href + " .wp-cart-pc");// Add space between URL and selector.

            }
        });
    });
});
</script>
@endsection

