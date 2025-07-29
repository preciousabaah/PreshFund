@extends('layouts.app2')

@section('title', 'Dashboard')

@push('styles')
<style>
.card {
    border-radius: 8px;
    border: 1px solid #f1f1f1;
    background-color: #fff;
}

.btn-primary {
    background-color: rgba(13, 209, 253, 0.93);
    border-color:rgba(13, 209, 253, 0.93);
}

.btn-outline-primary {
    color:rgba(13, 209, 253, 0.93);
    border-color:rgba(13, 209, 253, 0.93);
}

.btn-outline-primary:hover {
    background-color:rgba(13, 209, 253, 0.93);
    color: #fff;
}
</style>
@endpush

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-bold">No {{ Auth::user()->id }}{{ now()->format('ymdHis') }}</h5>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('help.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Subject and Priority -->
                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="subject" class="form-label">Subject <span class="text-danger">*</span></label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter subject" required>
                    </div>
                    <div class="col-md-4">
                        <label for="priority" class="form-label">Priority <span class="text-danger">*</span></label>
                        <select name="priority" id="priority" class="form-select" required>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High" selected>High</option>
                        </select>
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-3">
                    <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                    <textarea name="message" id="message" rows="5" class="form-control" placeholder="Enter your message here..." required></textarea>
                </div>

                <!-- Attachments -->
                <div class="mb-3">
                    <label for="attachments" class="form-label">Attachments</label>
                    <input type="file" name="attachments[]" id="attachments" class="form-control" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx">
                    <small class="text-danger">Max 5 files can be uploaded. Maximum upload size is 6MB.</small>
                    <br>
                    <small class="text-muted">Allowed File Extensions: .jpg, .jpeg, .png, .pdf, .doc, .docx</small>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-paper-plane"></i> Submit
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
