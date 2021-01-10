
{{-- SHow tất cả product ở các danh mục con từ danh mục cha lớn nhất --}}

@if (count($categoryChild->categoryChild) != 0)
    @foreach($categoryChild->categoryChild as $item1)
        @include('partials.list_product_child_category',['categoryChild'=>$item1])
    @endforeach
@else
@foreach($categoryChild->products as $item)

<div class="col-xl-4 col-md-6 col-lg-6 col-sm-6">
    <!--Product Start-->
    <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
        <div class="ht-product-inner">
            <div class="ht-product-image-wrap">
                <a href="product-details.html" class="ht-product-image"> <img src="{{ asset($item->product_image_path) }}" alt="Universal Product Style"> </a>
                <div class="ht-product-action">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                        <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                        <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="ht-product-content">
                <div class="ht-product-content-inner">
                    <div class="ht-product-categories"><a href="#">Chair</a></div>
                    <h4 class="ht-product-title"><a href="product-details.html">{{ $item->name }}</a></h4>
                    <div class="ht-product-price">
                        <span class="new">{{ number_format($item->price,0,'',',') }}</span>
                        <span class="old">$80.00</span>
                    </div>
                    <div class="ht-product-ratting-wrap">
                        <span class="ht-product-ratting">
                            <span class="ht-product-user-ratting" style="width: 100%;">
                                <i class="sli sli-star"></i>
                                <i class="sli sli-star"></i>
                                <i class="sli sli-star"></i>
                                <i class="sli sli-star"></i>
                                <i class="sli sli-star"></i>
                            </span>
                        <i class="sli sli-star"></i>
                        <i class="sli sli-star"></i>
                        <i class="sli sli-star"></i>
                        <i class="sli sli-star"></i>
                        <i class="sli sli-star"></i>
                        </span>
                    </div>
                </div>
                <div class="ht-product-action">
                    <ul>
                        <li><a href="#"><i class="sli sli-magnifier"></i><span class="ht-product-action-tooltip">Quick View</span></a></li>
                        <li><a href="#"><i class="sli sli-heart"></i><span class="ht-product-action-tooltip">Add to Wishlist</span></a></li>
                        <li><a href="#"><i class="sli sli-refresh"></i><span class="ht-product-action-tooltip">Add to Compare</span></a></li>
                        <li><a href="#"><i class="sli sli-bag"></i><span class="ht-product-action-tooltip">Add to Cart</span></a></li>
                    </ul>
                </div>
                <div class="ht-product-countdown-wrap">
                    <div class="ht-product-countdown" data-countdown="2020/01/01"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Product End-->
</div>
    @endforeach
@endif
