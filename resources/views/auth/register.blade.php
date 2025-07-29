
@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
        overflow: hidden; /* prevent scrolling */
    }
</style>

<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center bg-light" style="overflow: hidden;">
    <div class="row w-100" style="height: 100vh;">
        <!-- Left Image Side -->
        <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center text-white"
             style="background-color: #0db4dc; height: 100vh;">
            <div class="text-center">
               <!-- <img src="{{ asset('resources/img/register-mockup.png') }}" alt="Register Mockup"
                     class="img-fluid" style="max-height: 500px;">-->
                <h2 class="mt-4">Sign Up</h2>
            </div>
        </div>

        <!-- Right Form Side -->
        <div class="col-md-6 bg-white p-5 d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="w-100" style="max-width: 500px;">
                <h2 class="mb-4 text-center text-dark">Create Account</h2>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control @error('password') is-invalid @enderror"
                               name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <!-- Submit -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-lg text-white" style="background-color: #0db4dc;">
                            Submit
                        </button>
                    </div>

                    <!-- Already have account -->
                    <div class="text-center mt-3">
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
