
{{-- SHow tất cả product ở các danh mục con từ danh mục cha lớn nhất --}}

@if (count($categoryChild->categoryChild) != 0)
    @foreach($categoryChild->categoryChild as $item1)
        @include('partials.list_product_child_category',['categoryChild'=>$item1])
    @endforeach
@else
@foreach($categoryChild->products as $item)

<div class="shop-list-wrap shop-list-mrg2 shop-list-mrg-none mb-30">
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="product-list-img">
                <a href="product-details.html">
                    <img src="{{ asset($item->product_image_path) }}" alt="Universal Product Style">
                </a>
                <div class="product-quickview">
                    <a href="#" title="Quick View" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier-add"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 align-self-center">
            <div class="shop-list-content">
                <h3><a href="product-details.html">Demo Product Name</a></h3>
                <p>It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard The standard chunk.</p>
                <span>Chair</span>
                <div class="shop-list-price-action-wrap">
                    <div class="shop-list-price-ratting">
                        <div class="ht-product-list-price">
                            <span class="new">{{ number_format($item->price,0,'',',') }}</span>
                            <span class="old">$70.00</span>
                        </div>
                        <div class="ht-product-list-ratting">
                            <i class="sli sli-star"></i>
                            <i class="sli sli-star"></i>
                            <i class="sli sli-star"></i>
                            <i class="sli sli-star"></i>
                            <i class="sli sli-star"></i>
                        </div>
                    </div>
                    <div class="ht-product-list-action">
                        <a class="list-wishlist" title="Add To Wishlist" href="#"><i class="sli sli-heart"></i></a>
                        <a class="list-cart" title="Add To Cart" href="#"><i class="sli sli-basket-loaded"></i> Add to Cart</a>
                        <a class="list-refresh" title="Add To Compare" href="#"><i class="sli sli-refresh"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endforeach
@endif
