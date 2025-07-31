<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
   <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title', 'Dashboard')</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <style>
    body {
      background: #f8f9fa;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
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

    .content {
      margin-left: 250px;
      padding: 1rem;
      transition: margin-left 0.3s ease;
    }

    /* Hide toggle button by default */
    .toggle-btn {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      background-color: #0db4dc;
      border: none;
      color: #fff;
      padding: 8px 10px;
      border-radius: 5px;
      z-index: 1051;
    }

    .toggle-btn i {
      font-size: 20px;
    }

    /* Small screens (sm and xs) */
    @media (max-width: 767.98px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.show {
        transform: translateX(0);
      }

      .content {
        margin-left: 0;
      }

      .toggle-btn {
        display: block;
        /* Show only on sm and xs */
      }
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
      display: flex;
      align-items: center;
    }

    .sidebar .nav-link.active {
      background-color: rgba(13, 209, 253, 0.1);
      color: rgba(13, 209, 253, 0.93);
      border-radius: 8px;
      font-weight: 600;
    }

    .sidebar .nav-link i {
      margin-right: 10px;
      color: rgba(13, 209, 253, 0.93);
    }




    .filter-btn {
      background-color: #0db4dc;
      border: none;
      color: #fff;
      border-radius: 6px;
      padding: 8px 16px;
      font-weight: 500;
      transition: background-color 0.3s ease;
    }

    .filter-btn:hover {
      background-color: #0aa3c6;
    }


    .table thead th {
      background-color: rgba(13, 180, 220, 0.1);
      color: #0db4dc;
      font-weight: 600;
      border-bottom: 2px solid rgba(13, 180, 220, 0.3);
    }
  </style>

  @stack('styles')
</head>

<body>
  <!-- Toggle Button (small screens only) -->
  <button class="toggle-btn" id="toggleBtn">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo">
      <img src="{{ asset('img/img_logo.png') }}" alt="Logo" />
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ request()->is('index') ? 'active' : '' }}" href="{{ route('index') }}">
          <i class="fas fa-tachometer-alt"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('monthly-plan') ? 'active' : '' }}" href="{{ route('monthly.plan') }}">
          <i class="fas fa-wallet"></i> Monthly Plan
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('transactions') ? 'active' : '' }}" href="{{ route('transactions') }}">
          <i class="fas fa-history"></i> Transaction History
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ request()->is('notifications') ? 'active' : '' }}" href="{{ route('notifications') }}">
          <i class="fas fa-bell"></i> Notifications
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ request()->is('help') ? 'active' : '' }}" href="{{ route('help.store') }}">
          <i class="fas fa-hands-helping"></i> Request for help
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link {{ request()->is('settings') ? 'active' : '' }}" href="{{ route('settings') }}">
          <i class="fas fa-cog"></i> Profile
        </a>
      </li>
      <li class="nav-item mt-5">
        <a class="nav-link" href="{{ route('logout') }}">
          <i class="fas fa-sign-out-alt"></i> Log Out
        </a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    @yield('content')
  </div>

  <!-- Bootstrap Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    const toggleBtn = document.getElementById("toggleBtn");
    const sidebar = document.getElementById("sidebar");
    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("show");
      const icon = toggleBtn.querySelector("i");
      if (sidebar.classList.contains("show")) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");
      } else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
      }
    });
  </script>

  @stack('scripts')
</body>

</html>