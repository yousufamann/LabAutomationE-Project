<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab Automation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('HomeAssets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('HomeAssets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('HomeAssets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('HomeAssets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('HomeAssets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>123
                        Street, New York, USA</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm,
                        Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Career</a>
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="#">Terms</a>
                    <a class="breadcrumb-item small text-body" href="#">FAQs</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span>+012 345 6789</span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0">Lab<span class="text-dark">Automation</span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span>info@example.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0">Lab<span class="text-dark">Automation
                        </span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="about" class="nav-item nav-link">About</a>
                        <a href="test" class="nav-item nav-link">Tests</a>
                        <a href="product" class="nav-item nav-link">Products</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        @if (Auth::check())
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="btn btn-link">Logout</button>
                            </form>
                        @else
                            <a href="/login" class="nav-item nav-link">Login</a>
                        @endif
                        <a class="btn btn-sm-square btn-primary ms-2"
                            href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-sm-square btn-primary ms-2"
                            href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('HomeContent')

    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow
        fadeIn"
        data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="h1 text-primary mb-0">Lab<span class="text-white">
                                Automation</span></h1>
                    </a>
                    <p class="fs-5 mb-4">
                        Excellence in research with cutting-edge technology and rigorous standards, driving innovation
                        and delivering precise results.
                    </p>
                    <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA
                    </p>
                    <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
                    <div class="d-flex mt-4">

                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Quick Links</h4>
                            <a class="btn btn-link" href="about">About Us</a>
                            <a class="btn btn-link" href="contact">Contact Us</a>
                            <a class="btn btn-link" href="test">Tests</a>
                            <a class="btn btn-link" href="product">Products</a>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="about">About Us</a>
                            <a class="btn btn-link" href="contact">Contact Us</a>
                            <a class="btn btn-link" href="test">Tests</a>
                            <a class="btn btn-link" href="product">Products</a>
                        </div>
                        <div class="col-sm-12">
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text"
                                        class="form-control border-0 py-3
                                      px-4"
                                        style="background: rgba(255, 255, 255, .1);"
                                        placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign
                                        Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0"><a href="#">Lab Automation</a>. All Rights
                        Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">
                     Designed by Our Team!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle. min.js"></script>
    <script src="{{ asset('HomeAssets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('Homeassets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('HomeAssets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('HomeAssets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('HomeAssets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('HomeAssets/js/main.js') }}"></script>
