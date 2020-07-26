@extends('front.layouts.app',['page'=>'Home'])

@section('content')
<div class="site-blocks-cover" data-aos="fade">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-5 text-center">
                <div class="featured-hero-product w-100">
                    <h1 class="mb-2">Iphone 11</h1>
                    <h4>Limited for Sale</h4>
                    <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
                    <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-7 text-center text-lg-right">
                <img src="{{ asset('front') }}/images/iphone11.png" alt="Image" class="img-fluid img-1">
            </div>

        </div>
    </div>

</div>


<div class="products-wrap border-top-0">
    <div class="container-fluid">
        <div class="row no-gutters products">
            @foreach ($bestSeller as $product)
            <div class="col-6 col-md-6 col-lg-4">
                <a href="{{ route('shop.detail', $product->id) }}" class="item">
                    @if ($product->new_price)
                    <span class="tag">Sale</span>
                    @elseif ($product->sold == $product->qty)
                    <span class="tag bg-danger">Sold</span>
                    @endif
                    <img src="{{ asset('asset').'/'.$product->category.'/thumbnail/'.$product->img }}" alt="Image"
                        class="img-fluid">
                    <div class="item-info">
                        <h3>{{ $product->name }}</h3>
                        <span class="collection d-block">Summer Collection</span>
                        @if ($product->new_price)
                        <strong class="price">${{ $product->new_price }}
                            <del>${{ $product->price }}</del></strong>
                        @else
                        <strong class="price">${{ $product->price }}</strong>
                        @endif
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>

<div class="site-blocks-cover inner-page py-5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 ml-auto order-lg-2 align-self-start">
                <div class="site-block-cover-content">
                    <h2 class="sub-title">#New Collection 2020</h2>
                    <h1>Iphone SE <br><small> 2020</small>
                    </h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-8 order-1">
                <img src="{{ asset('front') }}/images/iphonese.png" alt="Image" class="img-fluid" width="75%">
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="title-section text-center col-12">
                <h2 class="text-uppercase">New Arrival</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 block-3 products-wrap">
                <div class="nonloop-block-3 owl-carousel">

                    @foreach ($new->take(6) as $product)
                    <div class="product">
                        <a href="{{ route('shop.detail', $product->id) }}" class="item">
                            @if ($product->new_price)
                            <span class="tag">Sale</span>
                            @elseif ($product->sold == $product->qty)
                            <span class="tag bg-danger">Sold</span>
                            @endif
                            <img src="{{ asset('asset').'/'.$product->category.'/thumbnail/'.$product->img }}"
                                alt="Image" class="img-fluid">
                            <div class="item-info">
                                <h3>{{ $product->name }}</h3>
                                <span class="collection d-block">Summer Collection</span>
                                @if ($product->new_price)
                                <strong class="price">${{ $product->new_price }}
                                    <del>${{ $product->price }}</del></strong>
                                @else
                                <strong class="price">${{ $product->price }}</strong>
                                @endif
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<div class="site-blocks-cover inner-page py-5" data-aos="fade">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
                <div class="site-block-cover-content">
                    <h2 class="sub-title">#Best Seller</h2>
                    <h1>Iphone <br> Xr</h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                </div>
            </div>
            <div class="col-lg-6 order-1">
                <img src="{{ asset('front') }}/images/iphonexr.jpg"" alt=" Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
