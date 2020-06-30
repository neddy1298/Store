@extends('admin.layouts.app',['page'=>'Product','page2'=>'All'])

@section('css')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('admin') }}/node_modules/selectric/public/selectric.css">
@endsection

@section('content')

    <div class="section-header">
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
                                <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Available <span class="badge badge-primary">1</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sold<span class="badge badge-primary">1</span></a>
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
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="clearfix mb-3"></div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th class="text-center pt-2">
                                        <div class="custom-checkbox custom-checkbox-table custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                   class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Products Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                </tr>
                                @foreach($products as $product)

                                    <tr>
                                        <td>
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                       class="custom-control-input" id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>{{ $product->name }}
                                            <div class="table-links">
                                                <a href="#">View</a>
                                                <div class="bullet"></div>
                                                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                                                <div class="bullet"></div>
{{--                                                <form action="POST" method="post">--}}
{{--                                                    @csrf--}}
{{--                                                    <button type="submit" class="btn text-danger">Trash</button>--}}
{{--                                                </form>--}}
                                                <a href="{{ route('products.trash', $product->id) }}" class="text-danger">Trash</a>
                                            </div>
                                        </td>
                                        <td>${{ $product->price }}</td>
                                        <td>{{ ($product->qty - $product->sold).'/'.$product->qty }}</td>
                                        <td>{{ $product->view }}</td>
                                        <td>
                                            <p class="badge {{ ($product->status == 'Available' ? 'badge-success' : 'badge-danger')}}">{{ $product->status }}</p>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="float-right">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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

    <!-- Page Specific JS File -->
    <script src="{{ asset('admin') }}/js/page/features-posts.js"></script>
@endsection
