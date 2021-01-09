
{{-- SHow tất cả product ở các danh mục con từ danh mục cha lớn nhất --}}

@if (count($categoryChild->categoryChild) != 0)
    @foreach($categoryChild->categoryChild as $item1)
        @include('partials.list_product_child_category',['categoryChild'=>$item1])
    @endforeach
@else
@foreach($categoryChild->products as $item)

    <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
        <div class="product-item">
        <div class="item-inner">
            <div class="product-thumbnail">
            <div class="pr-img-area"> <a title="{{ $item->name }}" href="{{ route('detail.products',['slug'=>$item->slug]) }}">
                <figure> <img class="first-img" src="{{ asset($item->product_image_path) }}" alt=""> <img class="hover-img" src="{{ asset($item->product_image_path) }}" alt=""></figure>
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
                <div class="item-title"> <a title="{{ $item->name }}" href="{{ route('detail.products',['slug'=>$item->slug]) }}">{{ $item->name }}</a> </div>
                <div class="item-content">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                    <div class="price-box">
                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{ number_format($item->price,0,'',',') }} đ</span> </p>
                    <?php $price_fake = $item->price + 1000000;
                        // dd($price_fake)
                    ?>
                    {{-- <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{ number_format($price_fake,0,'',',') }} đ</span> </p> --}}
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </li>
    @endforeach
@endif
