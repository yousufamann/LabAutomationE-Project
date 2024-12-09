<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('AdminAssets/assets/images/favicon.ico') }}">
    <!-- jquery.vectormap css -->
    <link href="{{ asset('AdminAssets/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('AdminAssets/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('AdminAssets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('AdminAssets/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

</head>
{{-- @if (!Auth::user()){ --}}
{{-- {{ 'Page' }} --}}
{{-- <script>window.location = "/login";</script> --}}
{{-- } --}}
{{-- @endif --}}

<body data-layout="detached" data-topbar="colored">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="container-fluid">
                        <div class="float-end">
                            <div class="dropdown d-inline-block d-lg-none ms-2">
                                <button type="button"
                                    class="btn header-item noti-icon
                                 waves-effect"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg
                                 dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..."
                                                    aria-label="Recipient's username">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="submit"><i
                                                            class="mdi mdi-magnify">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect"
                                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{ asset('AdminAssets/assets/images/users/avatar-2.jpg') }}"
                                        alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1">
                                        {{ Auth::user()->name }}
                                    </span>
                                    <i
                                        class="mdi mdi-chevron-down d-none
                                         d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end text-center">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="btn btn-link">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown d-inline-block">
                                <button type="button"
                                    class="btn header-item noti-icon
                                  right-bar-toggle waves-effect"
                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                                    aria-controls="offcanvasExample">
                                </button>
                            </div>
                        </div>
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html">
                                <span>
                                    <img width="60" height="60"
                                        src="https://img.icons8.com/external-kmg-design-outline-color-kmg-design/64/external-laboratory-college-kmg-design-outline-color-kmg-design.png"
                                        alt="external-laboratory-college-kmg-design-outline-color-kmg-design" />
                                </span>
                        </div>
                        <div>
                        

            </header> <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                <div class="h-100">
                    <div class="user-wid text-center py-4">
                        <div class="user-img">
                            <img src="{{ asset('AdminAssets/assets/images/users/avatar-2.jpg') }}" alt=""
                                class="avatar-md mx-auto rounded-circle">
                        </div>
                        <div class="mt-3">
                            <a href="#" class="text-reset fw-medium font-size-16">
                                {{ Auth::user()->name }}
                            </a>
                        </div>
                    </div>
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li>
                                <a href= "products">
                                    <span class="mdi mdi-microscope"></span>
                                    <span>Products</span>
                                </a>
                            </li>
                            <li>
                                <a href="testingtypes">
                                    <span class="mdi mdi-arrow-top-right-thick"></span>
                                    <span>TestingTypes</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <!-- start main-content -->
            <div class="main-content">
                <div class="page-content">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="page-title-box d-flex align-items-center
                              justify-content-between">
                                <a href="dashboard">
                                    <h4 class="page-title mb-0 font-size-18">Dashboard
                                    </h4>
                                </a>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to
                                            Admin Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                </div>
                <!-- End Page-content -->

                @yield('AdminContent')

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6"></div>
                        </div>
                    </div>
                </footer>
                <!--Footer End -->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
    </div>
    <!-- end container-fluid -->

    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('AdminAssets/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('AdminAssets/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- jquery.vectormap map -->
    <script src="{{ asset('AdminAssets/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
    </script>
    <script src="{{ asset('AdminAssets/assets/js/app.js') }}"></script>
</body>

</html>
