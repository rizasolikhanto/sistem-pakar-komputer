<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Pakar Pendeteksi Kerusakan Komputer</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <style>
        * {
            font-family: 'Quicksand', sans-serif;
        }
        .active{
            background-color:#1f9e85 ;
            border-radius: 30px;
        }
    </style> 
    <link href="{{ asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
<!-- Page Wrapper -->
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-light topbar static-top shadow">
    <!-- Topbar Navbar -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-text mx-3">
            <img src="{{asset('assets/logo.png')}}" class="img-fluid" alt="logo-diaregsi" width="60px">
        </div>
        <h2>
            Sistem Pakar Pendeteksi Kerusakan Komputer
        </h2>
    </a>
    <ul class="navbar-nav ml-auto">
        </li>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                <img class="img-profile rounded-circle"
                    src="{{asset('sb-admin/img/undraw_profile.svg')}}">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/logout" >
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- End of Topbar -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion border" id="accordionSidebar" style="background-color: #1abc9c;">
        <!-- Sidebar - Brand -->
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item - Dashboard -->
        <div class="mt-4"></div>
        <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Request::is('admin/gejala*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.gejala.index') }}">
                <i class="fa fa-calendar"></i>
                <span>Gejala</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/kerusakan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.kerusakan.index') }}">
                <i class="fa fa-calendar"></i>
                <span>Kerusakan</span></a>
        </li>
        <li class="nav-item {{ Request::is('admin/rules*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.rules.index') }}">
                <i class="fa fa-calendar"></i>
                <span>Rules</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Dewa 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('sb-admin/js/sb-admin-2.min.js') }}"></script>


@yield('script')


</body>

</html>
