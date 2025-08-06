<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom Admin CSS -->
    <style>
        :root {
            --sidebar-width: 250px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: #343a40;
            color: white;
            transition: all 0.3s;
            z-index: 1000;
        }
        
        .main-content {
            margin-left: var(--sidebar-width);
            padding: 20px;
            transition: all 0.3s;
        }
        
        .sidebar-header {
            padding: 20px;
            background: #2c3136;
        }
        
        .sidebar-menu {
            padding: 0;
            list-style: none;
        }
        
        .sidebar-menu li {
            padding: 10px 20px;
            border-bottom: 1px solid #4b545c;
        }
        
        .sidebar-menu li a {
            color: #adb5bd;
            text-decoration: none;
            display: block;
        }
        
        .sidebar-menu li a:hover {
            color: white;
        }
        
        .sidebar-menu li.active {
            background: #007bff;
        }
        
        .sidebar-menu li.active a {
            color: white;
        }
        
        .sidebar-menu li i {
            margin-right: 10px;
        }
        
        .navbar-admin {
            height: 60px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        
        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-weight: 600;
        }
        
        .table th {
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            color: #6c757d;
        }
        
        .avatar {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 6px;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h4>Admin Panel</h4>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="/admin/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            </li>
            <li class="{{ request()->is('admin/advisory*') ? 'active' : '' }}">
                <a href="{{ route('admin.advisory.index') }}"><i class="fas fa-images"></i> Advisory</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-users"></i> Users</a>
            </li>
            <li>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
            </li>
            <li>
                {{-- <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); this.closest('form').submit();">
                       <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form> --}}
            </li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-admin">
            <div class="container-fluid">
                <button class="btn btn-link text-dark" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                {{-- <div class="ms-auto d-flex align-items-center">
                    <span class="me-3">Welcome, {{ Auth::user()->name }}</span>
                    <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random" class="avatar" alt="User">
                </div> --}}
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container-fluid py-4">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Admin JS -->
    <script>
        // Toggle sidebar
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            
            if (sidebar.style.left === '0px') {
                sidebar.style.left = `-${getComputedStyle(sidebar).width}`;
                mainContent.style.marginLeft = '0';
            } else {
                sidebar.style.left = '0';
                mainContent.style.marginLeft = getComputedStyle(sidebar).width;
            }
        });
        
        // Auto-init tooltips
        document.addEventListener('DOMContentLoaded', function() {
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>