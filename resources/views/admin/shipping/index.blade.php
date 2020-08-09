@extends('admin.layouts.app',['page'=>'User','page2'=>'Shipping-All'])

@section('css')
<!-- CSS Libraries -->
@endsection

@section('content')

<div class="section-header">
    @if($search ?? '')
    <a href="{{ route('shipping.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    @endif
    <h1>Shippings</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('shipping.index') }}">Shipping</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Shippings</h2>
    <p class="section-lead">
        @if($search ?? '')
        Result search of {{$search}}
        @else
        You can manage all Shipping.
        @endif
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping Table</h4>
                    <div class="card-header-form">
                        <form action="{{ route('shipping.search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th class="text-center">User ID</th>
                                <th>Name</th>
                                <th>Compan Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                            @foreach ($shippings as $shipping)
                            <tr>
                                <td class="text-center">{{ $shipping->id_user }}</td>
                                <td class=" align-middle">
                                    {{ $shipping->name }}
                                </td>
                                <td>{{ $shipping->company_name }}</td>
                                <td>{{ $shipping->phone }}</td>
                                <td>{{ $shipping->email }}</td>
                                <td><a href="{{ route('shipping.detail', $shipping->id) }}"
                                        class="btn btn-secondary">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endsection
