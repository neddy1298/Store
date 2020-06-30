@extends('front.layouts.app',['page'=>'Shop'])


@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <a
                    href="shop.html">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">The
                    Shoe</strong>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="border">
                    <img src="{{ asset('front') }}/images/product_1.jpg" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-black">The Shoe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt
                    facere, natus soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores
                    fuga voluptas, distinctio, aperiam, ratione dolore.</p>
                <p class="mb-4">Ex numquam veritatis debitis minima quo error quam eos dolorum quidem perferendis. Quos
                    repellat dignissimos minus, eveniet nam voluptatibus molestias omnis reiciendis perspiciatis illum
                    hic magni iste, velit aperiam quis.</p>
                <p><strong class="text-primary h4">$50.00</strong></p>
                <div class="mb-1 d-flex">
                    <label for="option-sm" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
                                id="option-sm" name="shop-sizes"></span> <span
                            class="d-inline-block text-black">Small</span>
                    </label>
                    <label for="option-md" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
                                id="option-md" name="shop-sizes"></span> <span
                            class="d-inline-block text-black">Medium</span>
                    </label>
                    <label for="option-lg" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
                                id="option-lg" name="shop-sizes"></span> <span
                            class="d-inline-block text-black">Large</span>
                    </label>
                    <label for="option-xl" class="d-flex mr-3 mb-3">
                        <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio"
                                id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra
                            Large</span>
                    </label>
                </div>
                <div class="mb-5">
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder=""
                            aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div>
                    </div>

                </div>
                <p><a href="cart.html" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">More Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <img src="{{ asset('front') }}/images/product_1.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>The Shoe</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50</strong>
                            </div>
                        </a>
                    </div>

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <span class="tag">Sale</span>
                            <img src="{{ asset('front') }}/images/product_2.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>Marc Jacobs Bag</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50 <del>$30.00</del></strong>
                            </div>
                        </a>
                    </div>

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <img src="{{ asset('front') }}/images/product_3.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>The Belt</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50</strong>
                            </div>
                        </a>
                    </div>

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <img src="{{ asset('front') }}/images/product_1.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>The Shoe</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50</strong>
                            </div>
                        </a>
                    </div>

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <span class="tag">Sale</span>
                            <img src="{{ asset('front') }}/images/product_2.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>Marc Jacobs Bag</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50 <del>$30.00</del></strong>
                            </div>
                        </a>
                    </div>

                    <div class="product">
                        <a href="shop-single.html" class="item">
                            <img src="{{ asset('front') }}/images/product_3.jpg" alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>The Belt</h3>
                                <span class="collection d-block">Summer Collection</span>
                                <strong class="price">$9.50</strong>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
