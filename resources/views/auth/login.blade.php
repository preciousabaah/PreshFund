@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
        overflow: hidden;
    }
</style>

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-light" style="overflow: hidden;">
    <div class="row w-100" style="height: 100vh;">
        <!-- Left Image Side -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center text-white"
             style="background-color: #0db4dc; height: 100vh;">
            <div class="text-center">
               <!-- <img src="{{ asset('resources/img/register-mockup.png') }}" alt="Login Mockup"
                     class="img-fluid" style="max-height: 500px;">-->
                <h2 class="mt-4">Welcome Back</h2>
            </div>
        </div>

        <!-- Right Form Side -->
        <div class="col-md-6 bg-white p-5 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="w-100" style="max-width: 500px;">
                <h2 class="mb-4 text-center text-dark">Login</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                               {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-lg text-white" style="background-color: #0db4dc;">
                            Login
                        </button>
                    </div>

                    <!-- Forgot password and Register -->
                    <div class="text-center mt-3">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        @endif
                        <br>
                        Don’t have an account? <a href="{{ route('register') }}">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

