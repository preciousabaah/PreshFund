@extends('layouts.app2')

@section('title', 'transactions')

@push('styles')
<style>
  body {
    background: #f8f9fa;
    margin: 0;
    padding: 0;
    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  }

  .sidebar {
    height: 100vh;
    background-color: #fff;
    border-right: 1px solid #dee2e6;
    position: fixed;
    top: 0;
    left: 0;
    width: 250px;
    padding-top: 20px;
    transition: transform 0.3s ease;
    z-index: 1040;
  }

  .sidebar .logo {
    text-align: center;
    margin-bottom: 20px;
  }

  .sidebar .logo img {
    max-width: 150px;
  }

  .sidebar .nav-link {
    color: #495057;
    font-weight: 500;
    padding: 10px 20px;
  }

  .sidebar .nav-link.active {
    background-color: rgba(13, 209, 253, 0.1);
    color: rgba(13, 209, 253, 0.93);
    border-radius: 8px;
    font-weight: 600;
  }

  .sidebar .nav-link i {
    margin-right: 8px;
    color: rgba(13, 209, 253, 0.93);
  }

  .content {
    margin-left: 250px;
    padding: 1rem;
    transition: margin-left 0.3s ease;
  }

  .toggle-btn {
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 1060;
    background-color: rgba(13, 209, 253, 0.93);
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 8px 10px;
    transition: all 0.3s ease;
  }

  @media (max-width: 992px) {
    .sidebar {
      transform: translateX(-100%);
    }

    .sidebar.show {
      transform: translateX(0);
    }

    .content {
      margin-left: 0;
    }

    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.5);
      width: 100%;
      height: 100%;
      z-index: 1030;
      display: none;
    }

    .overlay.show {
      display: block;
    }
  }

  .pricing-card {
    border: 1px solid #e0e0e0;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    height: 100%;
  }

  .pricing-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }

  .pricing-header {
    font-weight: 600;
    font-size: 1.3rem;
    color: #333;
    margin-bottom: 8px;
  }

  .pricing-amount {
    font-size: 1.8rem;
    font-weight: 800;
    color: #000;
    margin-bottom: 12px;
  }

  .pricing-amount span {
    font-weight: 400;
    font-size: 1rem;
    color: #6c757d;
  }

  .feature-list {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .feature-list li {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    color: #495057;
  }

  .feature-list li::before {
    content: "✔";
    color: #0dd1fd;
    margin-right: 8px;
    font-weight: bold;
    font-size: 1rem;
  }

  .btn-custom {
    background-color: #0dd1fd;
    color: #fff;
    border-radius: 8px;
    font-weight: 500;
    padding: 10px 20px;
    transition: all 0.3s ease;
  }

  .btn-custom:hover {
    background-color: #0db4dc;
    transform: scale(1.05);
  }

  .pagination-controls {
    text-align: center;
    margin-top: 20px;
  }

  .pagination-page-info {
    font-weight: bold;
    color: #0db4dc;
    margin: 0 10px;
  }

  #nextBtn {
    background-color: #0db4dc;
    border-color: #0db4dc;
  }

  #nextBtn:hover {
    background-color: #0aa3c6;
    border-color: #0aa3c6;
  }

  .hero-section {
    background: linear-gradient(135deg, #0db4dc, #0dd1fd);
    border-radius: 12px;
    margin: 0 auto 2rem auto;
    padding: 60px 20px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
  }

  .hero-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #fff;
  }

  .hero-subtitle {
    font-size: 1.2rem;
    color: #f1f1f1;
  }

  .btn-hero {
    background-color: #fff;
    color: #0db4dc;
    font-weight: 600;
    border-radius: 30px;
    padding: 10px 25px;
    transition: all 0.3s ease;
  }

  .btn-hero:hover {
    background-color: #f1f1f1;
    color: #0aa3c6;
  }


  @media (max-width: 768px) {
  .pricing-card .btn-custom {
    display: inline-block;
    width: auto;
  }
}



  

  .pagination-controls {
    text-align: center;
    margin-top: 20px;
  }

  .pagination-page-info {
    font-weight: bold;
    color: #0db4dc;
    margin: 0 10px;
  }

  #nextBtn {
    background-color: #0db4dc;
    border-color: #0db4dc;
  }

  #nextBtn:hover {
    background-color: #0aa3c6;
    border-color: #0aa3c6;
  }
</style>
@endpush


@section('content')
<!-- Hero Section -->
<div class="hero-section py-5 text-center text-white animate__animated animate__fadeIn">
  <div class="container">
    <h1 class="hero-title mb-3 animate__animated animate__fadeInDown animate__slow">
      Build Wealth, One Month at a Time
    </h1>
    <p class="hero-subtitle mb-4 animate__animated animate__fadeInUp animate__delay-1s">
      Flexible monthly saving plans designed to grow your finances and secure your dreams.
    </p>
    <a href="#plans-container" class="btn btn-hero animate__animated animate__fadeInUp animate__delay-2s">
      Get Started <i class="fas fa-arrow-right ms-2"></i>
    </a>
  </div>
</div>


@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
<!-- Plans Section -->
<div class="container py-3">
  <div class="row g-4" id="plans-container"></div>

  <!-- Pagination -->
  <div class="pagination-controls text-center mt-4">
    <button id="prevBtn" class="btn btn-outline-secondary me-2" disabled>
      <i class="fas fa-arrow-left"></i> Previous
    </button>
    <span class="pagination-page-info">
      Page <span id="currentPage">1</span> of <span id="totalPages">1</span>
    </span>
    <button id="nextBtn" class="btn btn-primary">
      Next <i class="fas fa-arrow-right"></i>
    </button>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Complete Your Application</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="paymentForm">
          <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" id="email-address" class="form-control" required />
          </div>
          <div class="form-group mb-3">
            <label for="amount">Amount</label>
            <input type="tel" id="amount" class="form-control" required readonly />
          </div>
          <div class="form-group mb-3">
            <label for="plan_name">Plan Name</label>
            <input type="text" id="plan_name" class="form-control" />
          </div>
          <div class="form-submit text-end">
            <button type="submit" class="btn text-light w-100" style="background-color: #0aa3c6;">Pay with Paystack</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>





@endsection

@push('scripts')
<script>
  const plans = [];

  // Generate dynamic plans
  for (let i = 1; i <= 50; i++) {
    plans.push({
      name: `Plan ${i}`,
      amount: i * 8000,
      frequency: "/monthly",
      capital: `₦${(i * 96000).toLocaleString()}`,
      earned: `₦${(i * 100000).toLocaleString()}`,
      interest: `₦${(i * 20000).toLocaleString()}`
    });
  }

  const container = document.getElementById("plans-container");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");
  const currentPageSpan = document.getElementById("currentPage");
  const totalPagesSpan = document.getElementById("totalPages");

  let currentPage = 1;
  const cardsPerPage = 9;
  const totalPages = Math.ceil(plans.length / cardsPerPage);
  totalPagesSpan.textContent = totalPages;

  function renderCards() {
    container.innerHTML = "";
    const start = (currentPage - 1) * cardsPerPage;
    const end = start + cardsPerPage;
    const paginatedPlans = plans.slice(start, end);

    paginatedPlans.forEach((plan) => {
      container.innerHTML += `
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="pricing-card p-4 text-center bg-white animate__animated animate__fadeInUp">
            <h5 class="pricing-header">${plan.name}</h5>
            <div class="pricing-amount">₦${plan.amount.toLocaleString()} <span>${plan.frequency}</span></div>
            <ul class="feature-list">
              <li>Capital Invested: <strong>${plan.capital}</strong></li>
              <li>Money Earned: <strong>${plan.earned}</strong></li>
              <li>Food Interest: <strong>${plan.interest}</strong></li>
              <li>No setup or hidden fees</li>
            </ul>
            <button class="btn btn-custom w-100" onclick="openModal('${plan.name}', ${plan.amount})">Apply</button>
          </div>
        </div>
      `;
    });

    currentPageSpan.textContent = currentPage;
    prevBtn.disabled = currentPage === 1;
    nextBtn.disabled = currentPage === totalPages;
  }

  prevBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage--;
      renderCards();
    }
  });

  nextBtn.addEventListener("click", () => {
    if (currentPage < totalPages) {
      currentPage++;
      renderCards();
    }
  });

 
  renderCards();
</script>





























<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
  // Open the payment modal with plan name and amount
  function openModal(planName, amount) {
    document.getElementById("plan_name").value = planName;
    document.getElementById("amount").value = amount;

    const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));
    paymentModal.show();
  }

  // Attach submit listener to form
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  function payWithPaystack(e) {
    e.preventDefault();

    const email = document.getElementById("email-address").value;
    const amount = parseFloat(document.getElementById("amount").value) * 100; // Convert to kobo
    const planName = document.getElementById("plan_name").value;

    let handler = PaystackPop.setup({
      key: 'pk_test_21ca4e0c19799c43f3ac94489818c4d81388e78d', // Replace with your real public key
      email: email,
      amount: amount,
      ref: '' + Math.floor((Math.random() * 1000000000) + 1), // Unique reference

      onClose: function () {
        alert('Payment window closed.');
      },

      callback: function (response) {
        // Send reference + plan name to Laravel backend for verification
        fetch("/paystack/verify", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('meta[name=\"csrf-token\"]').content
          },
          body: JSON.stringify({
            reference: response.reference,
            plan_name: planName
          })
        })
          .then(res => res.json())
          .then(data => {
            alert(data.message || "Payment successful!");
            bootstrap.Modal.getInstance(document.getElementById('paymentModal')).hide();
            paymentForm.reset(); // optional: reset form after success
          })
          .catch(err => {
            console.error("Verification error:", err);
            alert("Payment was completed but verification failed.");
          });
      }
    });

    handler.openIframe();
  }
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endpush