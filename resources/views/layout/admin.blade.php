<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title')</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon.png') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/chartist/dist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/style.min.css') }}">
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <a class="navbar-brand ml-2" href="/">
                        <b class="logo-icon">
                            <img src="{{ asset('img/icon.png') }}" width="50" alt="Perpustakaan Genius" />
                        </b>
                        <span class="logo-text">
                            {{-- <img src="plugins/images/logo-text.png" alt="homepage" /> --}}
                            <span style="color: black;font-family: 'Lemon/Milk';font-size: 26pt;vertical-align: middle;">GENIUS</span>
                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto d-flex align-items-center">
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block mr-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0" id="search">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar mt-3" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link @yield('a')" href="/admin/dashboard"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link @yield('b')" href="/admin/buku"
                                aria-expanded="false">
                                <i class="fas fa-book" aria-hidden="true"></i>
                                <span class="hide-menu">Daftar Buku</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link @yield('c')" href="/admin/pinjam"
                                aria-expanded="false">
                                <i class="fas fa-list-ul" aria-hidden="true"></i>
                                <span class="hide-menu">Peminjaman</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link @yield('d')" href="/admin/pengguna"
                                aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Users</span>
                            </a>
                        </li>
                        <li class="text-center p-20 upgrade-btn">
                            <a href="/logout"
                                class="btn btn-block btn-danger text-white">
                                LOG OUT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12" style="padding-top: 5px;padding-bottom: 5px;">
                        <h4 class="page-title text-uppercase font-medium font-14">@yield('nama')</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        @yield('btn')
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                @yield('content')
            </div>

            <footer class="footer text-center">Copyright 2021 © <a href="/">Perpustakaan "Genius"</a></footer>
        </div>
    </div>

    <script>
        $(document).ready(function(){
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>

    <!-- JavaScript -->
    <script src="{{ asset('admin/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/plugins/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dashboards/dashboard1.js') }}"></script>
</body>
</html>