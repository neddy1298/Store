@extends('auth.layout',['title'=>'Register'])

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus
            value="{{ old('email') }}">
        <div class="invalid-feedback">
            Please fill in your email
        </div>
    </div>

    <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Password</label>
        </div>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" tabindex="2" required>
        <div class="invalid-feedback">
            please fill in your password
        </div>
    </div>

    <div class="form-group">
        <div class="d-block">
            <label for="password" class="control-label">Password Confirmation</label>
        </div>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
            tabindex="2">
        <div class="invalid-feedback">
            please confirm your password
        </div>
    </div>

    <div class="form-group text-right">
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="float-left mt-3">
            Forgot Password?
        </a>
        @endif
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
            Register
        </button>
    </div>

    <div class="mt-5 text-center">
        have an account? <a href="{{ route('login') }}">Log In</a>
    </div>
</form>
@endsection
