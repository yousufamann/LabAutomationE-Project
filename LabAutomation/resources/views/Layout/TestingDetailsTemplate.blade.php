<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Testing Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('TestAssets/assets/images/favicon.ico') }}">
    <!-- App css -->
    <link href="{{ asset('TestAssets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- Icons -->
    <link href="{{ asset('TestAssets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<!-- body start -->

<body data-menu-color="dark" data-sidebar="default">
    <!-- Begin page -->
    <div id="app-layout">
        <!-- Topbar Start -->
        <div class="topbar-custom">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li>
                            <button class="button-toggle-menu nav-link">
                                <i data-feather="menu" class="noti-icon"></i>
                            </button>
                        </li>

                    </ul>
                    <ul class="list-unstyled topnav-menu mb-0 d-flex align-items-center">
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="{{ asset('TestAssets/assets/images/users/user-11.jpg') }}" alt="user-image"
                                    class="rounded-circle">
                                <span class="pro-user-name ms-1">
                                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down">
                                    </i>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                               <form action="/logout" method="post">
                            @csrf
                            <button href="/logout" class="btn btn-primary">Logout</button>
                        </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end Topbar -->

        <!-- Left Sidebar Start -->
        <div class="app-sidebar-menu">
            <div class="h-100" data-simplebar>
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <div class="logo-box">
                        <a href="index.html">
                            <span>
                                <img width="70" height="90" style="padding-top:20px"
                                    src="https://img.icons8.com/external-justicon-flat-justicon/64/external-microscope-hospital-and-medical-justicon-flat-justicon.png"
                                    alt="external-microscope-hospital-and-medical-justicon-flat-justicon" />
                            </span>
                        </a>
                    </div>
                    <br><br>
                    <ul id="side-menu">
                        <li>
                            <a href="dashboard">
                                <i data-feather="dashboard"></i>
                                <span><img width="20" height="20"
                                        src="https://img.icons8.com/offices/30/dashboard.png" alt="dashboard" />
                                    Dashboard </span>
                            </a>
                        </li>
                        <li>
                            <a href="testingdetails">
                                <i data-feather="testingdetails"></i>
                                <span><img width="20" height="20"
                                src="https://img.icons8.com/office/40/table-1.png" alt="testingdetails" />
                                    Testing Details
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="approvetesting">
                                <i data-feather="approvetesting"></i>
                                <span><img width="20" height="20"
                                    src="https://img.icons8.com/cotton/64/approved-webpage.png"
                                        alt="approved-webpage" />
                                    Approve Testing
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="rejecttesting">
                            <i data-feather="rejecttesting"></i>
                            <span><img width="28" height="28"
                            src="https://img.icons8.com/isometric/500/cancel.png"
                            alt="cancel" />
                                Reject Testing
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Sidebar -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">

                @yield('TestContent')

                <!-- Start Content-->
            </div>
        </div> <!-- container-fluid -->
    </div> <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col fs-13 text-muted text-center"></div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    <!-- END wrapper -->
    <!-- Vendor -->
    <script src="{{ asset('TestAssets/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('TestAssets/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('TestAssets/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('TestAssets/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('TestAssets/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('TestAssets/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
    <!-- for basic area chart -->
    <script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
</body>

</html>
