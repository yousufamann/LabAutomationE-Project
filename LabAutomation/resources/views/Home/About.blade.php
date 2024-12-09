@extends('Layout.HomeTemplate')

@section('HomeContent')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('HomeAssets/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('HomeAssets/img/about-2.jpg') }}">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="{{ asset('HomeAssets/img/about-3.jpg') }}">
                        </div>
                        <div class="col-6">
                            <div
                                class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex
                                flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">25</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Trusted Lab Experts and Latest Lab
                        Technologies</h1>
                    <p class="mb-4">
                        Our lab experts play a vital role in ensuring the
                        accuracy and reliability of scientific and medical research.These
                        professionals are responsible for conducting experiments, analyzing results, and maintaining quality
                        control.Staying updated with new technologies and advancements is
                        essential to maintaining trust and expertise.
                    </p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div
                                class="about-fact btn-square flex-column rounded-circle
                             bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Awards Winning</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</ h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div
                                class="about-fact btn-square flex-column rounded-circle
                             bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Complete Cases</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</ h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div
                                class="about-fact mt-n130 btn-square flex-column
                            rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Happy Clients</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</ h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">The
                            Best Medical Test & Laboratory
                            Solution</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                            Research advanced equipment to advanced data management
                            systems, we ensure accurate results and streamlined
                            processes for the best in laboratory excellence.
                        </p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-person-plus text-dark"></i>
                                </div>
                                <h5 class="mb-3">Experience Scientists</h5>
                                <span>
                                    Experience the frontier of innovation with our expert scientists.
                                </span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="icon-box-primary mb-4">
                                    <i class="bi bi-check-all text-dark"></i>
                                </div>
                                <h5 class="mb-3">Advanced Microscopy</h5>
                                <span>
                                    Uncovering hidden worlds with unparalleled clarity.
                                </span>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.
                        5s"
                            href="">Explore More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row h-100 align-items-end">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;"></div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4 wow fadeIn"
                                    data-wow-delay="0.
                                    3s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Sample Preparation</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn"
                                    data-wow-delay="0.
                                 4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Result Accuracy</span>
                                        <span class="text-white">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn"
                                    data-wow-delay="0.
                                5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Lab Equipments</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Team Start -->
    <div class="container-fluid container-team py-5">
        <div class="container pb-5">
            <div class="row g-5 align-items-center mb-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/team-1.jpg') }}" alt="">
                </div>
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-3">Dr. John Martin</h1>
                    <p class="mb-1">CEO & Founder</p>
                    <p class="mb-5">LabAutomation, New York, USA</p>
                    <h3 class="mb-3">Biography</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar
                        tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla
                        risus. Pellentesque eu consequat augue.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar
                        tortor. Quisque vel lorem porttitor, malesuada arcu quis, fringilla
                        risus. Pellentesque eu consequat augue.</p>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.facebook.com/profile.php?
                            id=61565288423127&mibextid=ZbWKwL">
                            <i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.instagram.com/invites/contact/?
                            igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                            <i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/team-2.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.facebook.com/profile.php?
                             id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Alex Robin</h5>
                            <span>Lab Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/team-3.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.facebook.com/profile.php?
                                 id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/  contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Andrew Bon</h5>
                            <span>Lab Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/team-4.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.facebook.com/profile.php?
                                id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Martin Tompson</h5>
                            <span>Lab Assistant</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/team-5.jpg') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.facebook.com/profile.php?
                                 id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe">
                                    <i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Clarabelle Samber</h5>
                            <span>Lab Assistant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
