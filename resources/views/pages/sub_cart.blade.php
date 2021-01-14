@if (!empty($newCart))
    <div class="shopping-cart-top">
        <h4>Shoping Cart</h4>
        <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
    </div>
    <ul>
        @foreach ($newCart->products as $cartItem)
        <li class="single-shopping-cart">
            <div class="shopping-cart-img">
                <a href="#"><img alt="{{ $cartItem['productInfo']['name'] }}" src="{{ asset($cartItem['productInfo']['product_image_path']) }}"></a>
                <div class="item-close remove-cart" id-pro ="{{ $cartItem['productInfo']['id'] }}" url-temp="{{ route('cart.delete_item') }}"  title="Remove This Item" >
                    <a href="#"><i class="sli sli-close"></i></a>
                </div>
            </div>
            <div class="shopping-cart-title" style="width :116px;">
                <h4><a href="#">{{ $cartItem['productInfo']['name'] }} </a></h4>
                <span>{{ $cartItem['quantity'] }} x {{ number_format($cartItem['productInfo']['price'],0,'',',') }} đ</span>
            </div>
        </li>
        @endforeach
    </ul>
    <div class="shopping-cart-bottom">
        <div class="shopping-cart-total">
            <h4>Total : <span class="shop-total">@if(!empty(request()->session()->get('cart'))) {{ number_format(request()->session()->get('cart')->totalPrice,0,'',',') }} đ @endif</span></h4>
        </div>
        <div class="shopping-cart-btn btn-hover text-center">
            <a class="default-btn" href="checkout.html">checkout</a>
            <a class="default-btn" href="{{ route('cart.index') }}">view cart</a>
        </div>
    </div>
@else
    <div class="shopping-cart-bottom">
        <div class="shopping-cart-total">
            <h4>Total : <span class="shop-total">0 đ</span></h4>
        </div>
        <div class="shopping-cart-btn btn-hover text-center">
            <a class="default-btn" href="checkout.html">checkout</a>
            <a class="default-btn" href="{{ route('cart.index') }}">view cart</a>
        </div>
    </div>
@endif
