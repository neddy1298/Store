@extends('admin.layouts.app',['page'=>'Product','page2'=>'Product-All'])

@section('css')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('admin') }}/node_modules/selectric/public/selectric.css">
<link rel="stylesheet" href="{{ asset('admin') }}/node_modules/chocolat/dist/css/chocolat.css">
@endsection

@section('content')

<div class="section-header">
    @if($result ?? '')
    <a href="{{ route('products.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    @endif
    <h1>Products</h1>
    <div class="section-header-button">
        <a href="{{ route('products.create')}}" class="btn btn-primary">Add New</a>
    </div>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Posts</h2>
    <p class="section-lead">
        You can manage all posts, such as editing, deleting and more.
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('products.index') }}">All <span
                                    class="badge badge-white">{{ $products->count() }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Available <span
                                    class="badge badge-primary">{{ $products->where('status','=','Available')->count() }}</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sold<span
                                    class="badge badge-primary">{{ $products->where('status','=','Sold')->count() }}</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>All Posts</h4>
                </div>
                <div class="card-body">
                    <div class="float-left">
                        <select class="form-control selectric">
                            <option>Action For Selected</option>
                            <option>Move to Draft</option>
                            <option>Move to Pending</option>
                            <option>Delete Pemanently</option>
                        </select>
                    </div>
                    <div class="float-right">
                        <form action="{{ route('products.search') }}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="clearfix mb-3"></div>
                    @if ($result ?? '')
                    @include('admin.product.search')
                    @else
                    @include('admin.product.card')
                    @endif
                    <div class="float-right">
                        {{ $products->links("admin.layouts.pagination") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- JS Libraies -->
<script src="{{ asset('admin') }}/node_modules/selectric/public/jquery.selectric.min.js"></script>
<script src="{{ asset('admin') }}/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
<script src="{{ asset('admin') }}/node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('admin') }}/js/page/features-posts.js"></script>
@endsection
