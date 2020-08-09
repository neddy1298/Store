@extends('auth.layout',['title'=>'Register','login'=>'User'])

@section('content')
<form method="POST" action="{{ route('user.register.submit') }}">
    @csrf
    <div class="row">
        <div class="form-group col-12">
            <label for="first_name">Name</label>
            <input id="name" type="text" class="form-control" name="name" tabindex="1" required autofocus
                value="{{ old('name') }}">
            <div class="invalid-feedback">
                Please insert your name
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus
            value="{{ old('email') }}">
        <div class="invalid-feedback">
            Please fill in your email
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" tabindex="2" required minlength="6">
        <div class="invalid-feedback">
            please fill in your password
        </div>
    </div>

    <div class="form-group">
        <label for="password" class="control-label">Password Confirmation</label>
        <input id="confirm_password" type="password" class="form-control" name="password_confirmation" required
            tabindex="3">
        <div class="invalid-feedback">
            please confirm your password
        </div>
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input id="phone" type="number" class="form-control" name="phone" tabindex="4" required
            value="{{ old('phone') }}">
        <div class="invalid-feedback">
            Please fill in your phone number
        </div>
    </div>

    <input id="level" type="text" class="form-control" name="level" value="normal" hidden>

    <div class="form-group text-right">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="float-left mt-3">
            Forgot Password?
        </a>
        @endif
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="5">
            Register
        </button>
    </div>

    <div class="mt-5 text-center">
        have an account? <a href="{{ route('login') }}">Log In</a>
    </div>
</form>
@endsection
