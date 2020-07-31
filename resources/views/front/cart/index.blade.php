@extends('front.layouts.app',['page'=>'Cart'])

@section('content')

<div class="bg-light py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-0"><a href="{{ url('/') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                    class="text-black">Cart</strong></div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        @if ($carts->count() < 1) <div class="site-section">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="display-3 text-black">Your Cart is empty</h2>
                        <p class="lead mb-5">If you think this is an error, please visit our <a href="#">
                                FAQ on shopping
                                cart problems.</a></p>
                        <p><a href="{{ route('shop') }}" class="btn btn-sm height-auto px-4 py-3 btn-primary">Shop
                                Now</a>
                        </p>
                    </div>
                </div>
            </div>
    </div>
    @else
    <div class="row mb-5">
        <div class="col 12">
            <div class="site-blocks-table">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">Image</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Color</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-total">Total</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($carts as $cart)
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{ route('shop.detail', $cart->id_product) }}" target="_blank">
                                    <img src="{{ asset('asset').'/'.$cart->category.'/thumbnail/'.$cart->img }}"
                                        alt="Image" class="img-fluid">
                                </a>
                            </td>
                            <td class="product-name">
                                <h2 class="h5 text-black">{{ $cart->name }}</h2>
                            </td>
                            <td>@if($cart->new_price != 0)
                                {{ '$'.$cart->new_price}}
                                @else
                                {{ '$'.$cart->price}}
                                @endif
                            </td>
                            <td class="product-name">
                                <h2 class="h5 text-black">{{ $cart->color }}</h2>
                            </td>
                            <td>
                                <h5>{{ $cart->user_qty }}</h5>
                            </td>
                            <td>${{ $cart->total }}</td>
                            <form action="{{ route('cart.delete',$cart->id) }}" method="get">
                                @csrf
                                <td><button type="submit" class="btn btn-primary height-auto btn-sm">X</button>
                                </td>
                            </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row mb-5">
                <div class="col-md-6">
                    <button class="btn btn-outline-primary btn-sm btn-block"
                        onclick="window.location='{{ route('shop') }}'">Continue Shopping</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label class="text-black h4" for="coupon">Coupon</label>
                    <p>Enter your coupon code if you have one.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                    <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                            <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <strong class="text-black">${{ $carts->sum('total') }}.00</strong>
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-6">
                            <span class="text-black">Total</span>
                        </div>
                        <div class="col-md-6 text-right">
                            <strong class="text-black">${{ $carts->sum('total') }}.00</strong>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-primary btn-lg btn-block"
                                onclick="window.location='{{ url('/1/cart/checkout') }}'">Proceed To
                                Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
</div>

@endsection
