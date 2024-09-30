<div class="row justify-content-start" id="show-items">
    <!-- Product Card Start -->
    @foreach ($item as $val)
        <div class="col-lg-4 col-md-4 col-sm-6 col-6 product">
            <div class="product-card">
                <div class="product-image">
                    <a href="{{ route('product_detail', $val->id) }}">
                        <img src="{{ asset('uploads/item/' . $val->mainImag) }}" alt="Product 1">
                    </a>
                    <button class="buy-now">Buy Now</button>
                    <div class="icons">
                        <span class="icon heart-icon"><i class="fas fa-heart"></i></span>
                        <span class="icon cart-icon"><i class="fas fa-shopping-cart"></i></span>
                    </div>
                </div>
                <div class="product-details">
                    <div class="product-name">
                        <span>{{ $val->item_title }}</span>
                        <button class="rent-now">RENT NOW</button>
                    </div>
                    <div class="product-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">AED {{ $val->rrp_price }}</div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- Product Card Start -->
    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 product">
    <div class="product-card">
        <div class="product-image">
            <img src="{{ asset('./assets/images/product-images/product-image1-1.jpg') }}" alt="Product 1">
            <button class="buy-now">Buy Now</button>
            <div class="icons">
                <span class="icon heart-icon"><i class="fas fa-heart"></i></span>
                <span class="icon cart-icon"><i class="fas fa-shopping-cart"></i></span>
            </div>
        </div>
        <div class="product-details">
            <div class="product-name">
                <span>Product 1</span>
                <button class="rent-now">RENT NOW</button>
            </div>
            <div class="product-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="product-price">AED 250</div>
        </div>
    </div>
</div> --}}
</div>