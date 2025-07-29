@extends('layouts.app2')

@section('title', 'Dashboard')

@push('styles')
<style>
  body {
    background-color: #f4f7fa;
    font-family: 'Poppins', sans-serif;
    margin: 0;
  }

  .main-content {
    padding: 20px;
    transition: margin-left 0.3s ease;
  }

  .dashboard-header {
    font-weight: 700;
    color: #333;
  }

  .card-balance,
  .card-info {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
    height: 100%;
  }

  .card-balance {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .card-balance h5 {
    color: #888;
    font-size: 16px;
    margin-bottom: 5px;
  }

  .card-balance .balance {
    font-size: 24px;
    font-weight: 600;
    color: #0db4dc;
  }

  .btn-eye {
    background: transparent;
    border: none;
    color: #0db4dc;
    font-size: 18px;
    cursor: pointer;
  }

  .btn-purple {
    background: #0db4dc;
    color: #fff;
    border-radius: 8px;
    padding: 8px 16px;
    text-decoration: none;
  }

  .btn-purple:hover {
    background: #0aa3c6;
  }

  .small-card {
    background: #fff;
    border-radius: 10px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    transition: 0.3s;
    height: 100%;
  }

  .small-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  }

  .small-card i {
    font-size: 26px;
    color: #0db4dc;
  }

  .small-card h6 {
    margin-top: 10px;
    font-weight: 500;
  }

  .small-card p {
    margin: 0;
    font-size: 18px;
    font-weight: 600;
    color: #333;
  }

  .table-container {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    padding: 20px;
    margin-top: 20px;
    overflow-x: auto;


  }

  .table th {
    background: #f1f0fa;
    color: #0db4dc;
    font-weight: 600;
  }

  .table td {
    color: #555;
  }

  /* Responsive adjustments */
  @media (max-width: 992px) {
    .main-content {
      margin-left: 0;
    }

    .card-balance,
    .card-info,
    .small-card {
      margin-bottom: 15px;
    }
  }

  @media (max-width: 576px) {
    .dashboard-header {
      font-size: 1.4rem;
    }

    .balance {
      font-size: 1.2rem;
    }
  }





  .dashboard-card {
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    text-align: center;
    padding: 1rem;
    transition: all 0.3s ease;
  }

  /* Hover effect */
  .dashboard-card:hover {
    background-color: #0db4dc;
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(13, 180, 220, 0.4);
    cursor: pointer;
  }

  /* Ensure icons and text also turn white on hover */
  .dashboard-card:hover i,
  .dashboard-card:hover h6,
  .dashboard-card:hover p {
    color: #ffffff;
  }
</style>
@endpush

@section('content')

<div class="main-content">
 <h3 class="mb-4 dashboard-header">Dashboard</h3>

  <div class="row ">
    <div class="col-md-8">
      <div class="">
        <div class="card-body">
          <h5 class="">Welcome {{ Auth::user()->name }} 👋</h5>
        </div>
      </div>
    </div>
  </div>






  <p class="text-muted mb-1"></p>
   <h3 class="dashboard-header"></h3>
  <div class="row g-3 mt-3">

   
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card-balance">
        
        <div>
          <h5><i class="fas fa-wallet"></i> Total Balance</h5>
          <div class="balance" id="balanceText">
          ₦{{ number_format($totalPlansAmount ?? 0, 2) }}
        </div>
        </div>
        <button class="btn-eye" onclick="toggleBalance()">
          <i class="fas fa-eye" id="eyeIcon"></i>
        </button>
      </div>
    </div>




    <!-- Account Info -->
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="card-info">
        <h6>💳 Pay ₦5,000 to Activate Your Account</h6>
        <p class="mb-1">UBA Bank - <strong>2264374453</strong></p>
        <p class="mb-1">Opay - <strong>8124067936</strong></p>
        <p class="mb-1">Account Name: Abaah Daberechi Precious</p>
        <button class="btn-copy filter-btn" onclick="copyAccount()">
          <i class="fas fa-copy"></i> Copy
        </button>
      </div>
    </div>
  </div>

  <!-- Small Cards -->
  <div class="row g-3 mt-3">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="small-card dashboard-card">
        <i class="fas fa-wallet"></i>
        <h6>pending Transactions</h6>
        <p>{{$pendingTransactions ?? 0,}}</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="small-card dashboard-card">
        <i class="fas fa-exchange-alt"></i>
        <h6>Completed</h6>
        <p>{{ $completedTransactions ?? 0, }}</p>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="small-card dashboard-card">
        <i class="fas fa-calendar-check"></i>
        <h6>Total Applications</h6>
        <p>{{ $totalApplications  ?? 0,}}</p>
      </div>
    </div>
  </div>

  <!-- Latest Credits Table -->
  <div class="table-container">
    <h5 class="mb-3">Recent Applications</h5>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Reference</th>
          <th>Pan Name</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Date Applied</th>
        </tr>
      </thead>
      <tbody>

        @forelse($applications as $application)
        <tr>
          <td>{{ $application->reference }}</td>
          <td>{{ $application->plan_name }}</td>
          <td>₦{{ number_format($application->amount, 2) }}</td>
          <td>{{ $application->payment_status }}</td>
          <td>{{ $application->created_at->format('d M, Y') }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="5">No transactions yet.</td>
        </tr>
        @endforelse


      </tbody>
    </table>
  </div>
</div>
@endsection

@push('scripts')
<script>
  const totalBalance = "{{ number_format($totalPlansAmount, 2) }}";

  function toggleBalance() {
    const balance = document.querySelector('.balance');
    const icon = document.getElementById('eyeIcon');

    if (balance.textContent !== '******') {
      // Hide balance
      balance.textContent = '******';
      icon.classList.replace('fa-eye', 'fa-eye-slash');
      localStorage.setItem('balanceHidden', 'true'); // save preference
    } else {
      // Show balance
      balance.textContent = '₦' + totalBalance;
      icon.classList.replace('fa-eye-slash', 'fa-eye');
      localStorage.setItem('balanceHidden', 'false'); // save preference
    }
  }

  // Check saved state on page load
  window.addEventListener('DOMContentLoaded', () => {
    const balance = document.querySelector('.balance');
    const icon = document.getElementById('eyeIcon');
    const isHidden = localStorage.getItem('balanceHidden') === 'true';

    if (isHidden) {
      balance.textContent = '******';
      icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
      balance.textContent = '₦' + totalBalance;
      icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
  });


  function copyAccount() {
    const text = "UBA Bank - 2264374453 | Opay - 8124067936";
    navigator.clipboard.writeText(text).then(() => {
      alert("Account details copied!");
    }).catch(err => {
      alert("Failed to copy: " + err);
    });
  }
</script>


@endpush