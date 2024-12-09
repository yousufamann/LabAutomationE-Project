@extends('Layout.HomeTemplate')

@section('HomeContent')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0. 1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Product</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page">Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3" style="font-size: 40px">Products</h1>
            <p class="mb-5">
                From accuracy to efficiency—experience the difference with our advanced laboratory products.
            </p>
        </div>
    </div>

    <div class="container-fluid container-team py-4">
        <div class="container pb-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:175px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Automatic Analyzer 1.jpg') }}"
                                alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Automatic Analyzer</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/DAQ System 1.webp') }}"
                                alt="" style="height: 175px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">DAQ System</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Data Loggers 1.webp') }}"
                                alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Data Loggers</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/DC Power Supply 1.jpg') }}"
                                alt="" style="height: 175px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">DC Power Supply</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Enviromental Chamber 1.jpg') }}"
                                alt="" style="height:170px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Enviromental Chamber</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Fire Alarm System 1.jpg') }}"
                                alt="" style="height:195px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Fire Alarm System</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:195px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Fume Hood 1.jpg') }}"
                                alt="" style="height:170px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Fume Hood</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:195px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Laboratory Incubator 1.jpg') }}"
                                alt="" style="height:190px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Laboratory Incubator</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Liquid Handling System 1.jpg') }}"
                                alt="" style="height:170px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Liquid Handling System</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:195px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Microcontroller 1.jpg') }}"
                                alt="" style="height:170px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Microcontroller</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:195px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Microscope 1.jpg') }}"
                                alt="" style="height:190px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Microscope</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:195px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Oscilloscopes 1.jpg') }}"
                                alt="" style="height:190px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Oscilloscopes</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 pt-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/pH Meter 1.jpg') }}"
                                alt="" style="height:180px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">pH Meter</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:155px;">
                            <img class="img-fluid w-100"
                                src="{{ asset('HomeAssets/img/Progammable Logic Controller 1.jpg') }}" alt=""
                                style="height:160px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Programmable Logic Controller</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:180px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Robotic Arm 1.jpg') }}"
                                alt="" style="height:160px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Robotic Arm</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden" style="height:180px;">
                            <img class="img-fluid w-100" src="{{ asset('HomeAssets/img/Spectrophotometer 1.jpg') }}"
                                alt="" style="height:160px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Spectrophotometer</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End  -->
@endsection
