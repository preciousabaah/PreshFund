@extends('layouts.app2')

@section('title', 'Dashboard')

@push('styles')









@endpush

@section('content')

<div class="container">
    <div class="d-flex justify-content-end align-items-center mb-3">
        <!--<h5 class="fw-bold">No {{ Auth::id() }}{{ now()->format('ymdHis') }}</h5>-->
        <div>
            <a href="{{ route('settings') }}" class="btn text-white" style="background-color: #0aa3c6;">My Profile</a>
            <a href="{{ route('password') }}" class="btn btn-outline" style="color: #0aa3c6; border-color: #0aa3c6;">Change Password</a>
        </div>

    </div>

    <div class="row g-3 mt-5">
        <div class="col-lg-4">
            <div class="card text-center shadow-sm border" style="border-radius: 15px;">
                <div class="card-body">
                    <!-- Profile Photo -->
                    <div class="mb-3 position-relative">
                        <div class="rounded-circle mx-auto d-flex justify-content-center align-items-center shadow"
                            style="width: 150px; height: 150px; background-color: #f0f0f0; border: 4px solid #0aa3c6; cursor: pointer;"
                            onclick="document.getElementById('uploadPhoto').click()">

                            <img src="{{ Auth::user()->profile_photo 
                              ? asset('storage/profile_photos/' . Auth::user()->profile_photo) 
                              : asset('images/default-avatar.png') }}"
                                class="rounded-circle"
                                style="width: 100%; height: 100%; object-fit: cover;"
                                alt="Upload Photo">
                        </div>


                        <!-- Hidden file input -->
                        <form action="{{ route('profile.photo.update') }}" method="POST" enctype="multipart/form-data" id="photoForm">
                            @csrf
                            <input type="file" name="profile_photo" id="uploadPhoto" class="d-none" onchange="document.getElementById('photoForm').submit()">
                        </form>



                    </div>


                    <!-- Username -->
                    <h6 class=" mb-3">Username:
                        <span class="text-dark">{{ Auth::user()->name }}</span>
                    </h6>

                    <!-- Email -->
                    <h6 class="">Email:
                        <span class="text-dark">{{ Auth::user()->email }}</span>
                    </h6>
                </div>
            </div>
        </div>


        <!-- Right editable fields -->
        <div class="col-lg-8 mt-5">
            <div class="card shadow-sm mt-5">
                <div class="card-body ">



                    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row g-3">
                            <!-- Username -->
                            <div class="col-md-6">
                                <label class="form-label">Username <span class="text-danger">*</span></label>
                                <input type="text" name="username" class="form-control" value="{{ Auth::user()->name }}" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" required>
                            </div>

                            <!-- Profile Photo -->
                            <div class="col-md-12">
                                <label class="form-label">Profile Photo</label>
                                <input type="file" name="profile_photo" class="form-control">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-4">
                            <button type="submit" class="btn text-white w-100" style="background-color: #0aa3c6;">Submit</button>
                        </div>
                    </form>




                    <!-- Profile Photo -->
                           <!-- <div class="col-md-12">
                                <label class="form-label">Profile Photo</label>
                                <input type="file" name="profile_photo" class="form-control">
                                @if(Auth::user()->profile_photo)
                                //<div class="mt-2">
                                    <img src="{{ asset('storage/profile_photos/' . Auth::user()->profile_photo) }}" alt="Profile Photo" style="width: 100px; height: 100px; border-radius: 50%;">
                                </div>-->
                               <!-- @endif
                            </div>-->



                </div>
            </div>
        </div>
    </div>
</div>
@endsection