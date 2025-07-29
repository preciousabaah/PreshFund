@extends('layouts.app2')

@section('title', 'Dashboard')

@push('styles')









@endpush

@section('content')
<div class="container">

    <div class="d-flex justify-content-end align-items-center mb-3">
        <div>
            <a href="{{ route('settings') }}" class="btn btn-outline" style="color: #0aa3c6; border-color: #0aa3c6;">My Profile</a>
            <a href="{{ route('password') }}" class="btn text-white ms-2" style="background-color: #0aa3c6;">Change Password</a>
        </div>
    </div>

    <div class="card shadow-sm mt-5">
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
            @endif


            <form action="{{ route('password.change') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="current_password">Current Password</label>
                    <input type="password" name="current_password" id="current_password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="new_password">New Password</label>
                    <input type="password" name="new_password" id="new_password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="new_password_confirmation">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                </div>

               <button type="submit" class="btn text-white w-100" style="background-color: #0aa3c6;">
                    Change Password
                </button>
            </form>

        </div>
        
    </div>
</div>

@endsection