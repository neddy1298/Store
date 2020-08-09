@extends('admin.layouts.app',['page'=>'User','page2'=>'User-All'])

@section('css')
<!-- CSS Libraries -->
@endsection

@section('content')

<div class="section-header">
    <div class="section-header-back">
        @if($search ?? '')
        <a href="{{ route('user.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        @endif
    </div>
    <h1>Users</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></div>
    </div>
</div>

<div class="section-body">
    <h2 class="section-title">Users</h2>
    <p class="section-lead">
        @if($search ?? '')
        Result search of {{$search}}
        @else
        You can manage all User.
        @endif
    </p>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Table</h4>
                    <div class="card-header-form">
                        <form action="{{ route('user.search') }}" method="GET">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search" value="">
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td class=" align-middle">
                                    {{ $user->email }}
                                </td>
                                {{-- <td>
                                    <img alt="image" src="../assets/img/avatar/avatar-5.png" class="rounded-circle"
                                        width="35" data-toggle="tooltip" title="Wildan Ahdian">
                                </td> --}}
                                <td>{{ $user->phone }}</td>
                                <td><a href="{{ route('user.detail', $user->id) }}" class="btn btn-secondary">Detail</a>
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
