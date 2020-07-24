@extends('admin.layouts.app',['page'=>'Product','page2'=>'Input'])
@section('css')
<link rel="stylesheet" href="{{ asset('admin') }}/node_modules/summernote/dist/summernote-bs4.css">
<link rel="stylesheet" href="{{ asset('admin') }}/node_modules/selectric/public/selectric.css">
@endsection

@section('content')

<div class="section-header">
    <div class="section-header-back">
        <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Edit Product</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a></div>
        <div class="breadcrumb-item">Edit</div>
    </div>
</div>


<div class="col-12">
    <h2 class="section-title">Edit Post</h2>
    <p class="section-lead">
        On this page you can edit a product and fill in all fields.
    </p>
    <div class="card">
        <div class="card-header">
            <h4>Edit Your Product</h4>
        </div>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="name" required value="{{ $product->name }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                    <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="category" required>
                            <option value="{{ $product->category }}" disabled>{{ $product->category }}</option>
                            <option value="phone">Phone</option>
                            <option value="laptop">Laptop</option>
                            <option value="computer">Computer</option>
                            <option value="earphone">Earphone</option>
                            <option value="smart_watch">Smart Watch</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                    <div class="col-sm-12 col-md-7">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    $
                                </div>
                            </div>
                            <input type="text" class="form-control currency" name="price" required
                                value="{{ $product->price }}">
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Quantity</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="qty" required value="{{ $product->qty }}">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                    <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="desc" required>{{ $product->desc }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Thumbnail
                        (optional)</label>
                    <div class="col-sm-8 col-md-7">
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="img" id="image-upload" value="{{ $product->img }}" />
                        </div>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Last Thumbnail</label>
                    <div class="col-sm-8 col-md-7">
                        <img src="{{ asset('asset').'/'.$product->category.'/'.$product->img }}" alt="" srcset=""
                            width="700">
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary mr-1" type="submit">Edit Product</button>
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<!-- JS Libraies -->
<script src="{{ asset('admin') }}/node_modules/summernote/dist/summernote-bs4.js"></script>
<script src="{{ asset('admin') }}/node_modules/selectric/public/jquery.selectric.min.js"></script>
<script src="{{ asset('admin') }}/node_modules/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('admin') }}/js/page/features-post-create.js"></script>
@endsection
