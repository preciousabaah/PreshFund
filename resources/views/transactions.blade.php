@extends('layouts.app2')

@section('title', 'transactions')

@section('content')
<h3 class="mb-4">Transaction History</h3>

<div class="card-custom mb-3">
    <form method="GET" action="{{ route('transactions') }}">
        <div class="row g-3">
            <!-- Filter by Transaction Number -->
            <div class="col-md-4">
                <input type="text" name="reference" class="form-control" placeholder="Reference  Number" ... value="{{ request('reference') }}">

            </div>

            <!-- Filter by Date -->
            <div class="col-md-3">
                <input type="date" name="date" class="form-control" value="{{ request('date') }}">
            </div>

            <!-- Filter by Status -->
            <div class="col-md-3">
                <select name="status" class="form-select">
                    <option value="">Any Status</option>
                    <option value="Success" {{ request('status') == 'Success' ? 'selected' : '' }}>Success</option>
                    <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                </select>
            </div>

            <div class="col-md-2">
                <button type="submit" class="filter-btn">
                    <i class="fas fa-filter me-1"></i> Filter
                </button>
            </div>
        </div>
    </form>
</div>


<div class="table-responsive table-custom">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Reference</th>
                <th>Plan Name</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>

            @forelse($applications as $application)
            <tr>
                <td>{{ $application->id }}</td>
                <td>{{ $application->reference }}</td>
                <td>{{ $application->plan_name }}</td>
                <td>₦{{ number_format($application->amount, 2) }}</td>
                <td>{{ ucfirst($application->payment_status) }}</td>
                <td>{{ $application->created_at->format('d M, Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6">No transactions found for the selected criteria.</td>
            </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection