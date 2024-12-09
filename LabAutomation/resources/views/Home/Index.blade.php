@extends('Layout.HomeTemplate')

@section('HomeContent')
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('HomeAssets/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1
                                        class="display-1 text-white animated slideInRight
                                        mb-3">
                                        Award Winning Laboratory
                                        Center</h1>
                                    <p class="mb-5 animated slideInRight">Explore Cutting-Edge Research, Advanced Equipment,
                                        and Breakthrough Discoveries at Our State-of-the-Art
                                        Laboratory.
                                    </p>
                                    <a href=""
                                        class="btn btn-primary py-3 px-5 animated
                                    slideInRight">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('HomeAssets/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1
                                        class="display-1 text-white animated slideInLeft
                                     mb-3">
                                        Expet Doctors & Lab
                                        Assistants</h1>
                                    <p class="mb-5 animated slideInLeft">Explore Cutting-Edge Research, Advanced Equipment,
                                        and Breakthrough Discoveries at Our State-of-the-Art
                                        Laboratory.
                                    </p>
                                    <a href=""
                                        class="btn btn-primary py-3 px-5 animated
                                      slideInLeft">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

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
                        Our lab experts play a vital role in ensuring the accuracy and reliability of scientific and medical
                        research.These professionals are responsible for conducting experiments, analyzing results, and
                        maintaining quality control.Staying updated with new technologies and advancements is essential to
                        maintaining trust and expertise.
                    </p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div
                                class="about-fact btn-square flex-column rounded-circle
                             bg-primary ms-sm-auto">
                                <p class="text-white mb-0">Awards Winning</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div
                                class="about-fact btn-square flex-column rounded-circle
                             bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Complete Cases</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div
                                class="about-fact mt-n130 btn-square flex-column
                               rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Happy Clients</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0">
                            Pioneering Breakthroughs at Our Award-Winning Laboratory.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Expert Scientists</h5>
                        <p class="mb-0">
                            Refers to individuals who have reached a high level of proficiency in their field of scientific
                            discipline.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-cash-coin text-dark"></i>
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">
                            Our researchers and experts dedicated to ensuring equitable pricing models across industries.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-headphones text-dark"></i>
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">
                            Our specialists who provide continuous assistance and expertise in their respective fields.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Features Start -->
    <div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 pt-lg-5">
                    <div class="bg-white p-5 mt-lg-5">
                        <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">The
                            Best Medical Test & Laboratory Solution</h1>
                        <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">
                            Research advanced equipment to advanced data management systems, we ensure accurate results and
                            streamlined processes for the best in laboratory excellence.
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
                            <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-primary p-5">
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Sample Preparation</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-4 wow fadeIn" data-wow-delay="0.4s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Result Accuracy</span>
                                        <span class="text-white">95%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="experience mb-0 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span class="text-white">Lab Equipments</span>
                                        <span class="text-white">90%</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
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

    <!-- Product Start -->
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3" style="font-size:40px">Products</h1>
            <p class="mb-5">
                From accuracy to efficiency experience the difference with our advanced laboratory products.
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

    <!-- Test Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Test
                </h1>
                <p class="mb-5">
                    Trust in precision and excellence with our reliable, high-quality laboratory tests. Ensuring accurate
                    results for your peace of mind.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-trello text-dark"></i>
                        </div>
                        <h5 class="mb-3">Electrical Safety Testing</h5>
                        <p class="mb-4">
                            Safeguarding laboratory operations through precise electrical safety testing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-slack text-dark"></i>
                        </div>
                        <h5 class="mb-3">Enviromental Testing</h5>
                        <p class="mb-4">
                            Ensuring a sustainable future through precise environmental testing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-stickies-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3"> EMC Testing
                        </h5>
                        <p class="mb-4">
                            Ensuring electronic devices meet interference standards with precise EMC testing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-send-plus-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Perfomance Testing</h5>
                        <p class="mb-4">
                            Ensuring excellence through meticulous lab performance testing.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-exclude text-dark"></i>
                        </div>
                        <h5 class="mb-3">Reliability Testing</h5>
                        <p class="mb-4">
                            Testing reliability to guarantee consistent excellence.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-palette-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Compliance Testing</h5>
                        <p class="mb-4">
                            Guaranteeing precision and reliability in every lab result.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-motherboard-fill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Software Testing</h5>
                        <p class="mb-4">
                            Unveiling the Reliability of Software in the Laboratory.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-life-preserver text-dark"></i>
                        </div>
                        <h5 class="mb-3">Failure Analysis</h5>
                        <p class="mb-4">
                            Uncovering Root Causes to Drive Innovation and Improve Laboratory Results.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Test End -->

    <!-- Appoinment Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-4">We Ensure You Will Always Get The Best
                        Result</h1>
                    <p>
                        Our team of dedicated scientists ensures that you always get the best results through meticulous
                        research, advanced methodologies, and a relentless commitment to precision. By leveraging
                        cutting-edge technologies and innovative approaches, we deliver accurate, reliable outcomes that
                        push the boundaries of science.
                    </p>
                    <p class="mb-4">
                        Whether in the lab or the field, we apply rigorous standards to every step of the process, ensuring
                        that your goals are met with the highest level of excellence and expertise.
                    </p>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                        <div class="icon-box-primary">
                            <i class="bi bi-geo-alt text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Address</h5>
                            <span>123 Street, New York, USA</span>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                        <div class="icon-box-primary">
                            <i class="bi bi-clock text-dark fs-1"></i>
                        </div>
                        <div class="ms-3">
                            <h5>Office Time</h5>
                            <span>Mon-Sat 09am-5pm, Sun Closed</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h2 class="mb-4">Online Appoinment</h2>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="mail" placeholder="Your Email">
                                <label for="mail">Your Email</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                                <label for="mobile">Your Mobile</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <select class="form-select" id="service">
                                    <option selected>Electrical Safety Testing
                                    </option>
                                    <option value="">Enviromental Testing</option>
                                    <option value="">Electromagnetic Compatibility(EMC)Testing</option>
                                    <option value="">Perfomance Testing</option>
                                    <option value="">Reliabilty Testing</option>
                                    <option value="">Compliance Testing</option>
                                    <option value="">Software Testing</option>
                                    <option value="">Failure Analysis</option>
                                </select>
                                <label for="test">Choose A Test</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a
                             message here" id="message"
                                    style="height: 130px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-primary w-100 py-3" type="submit">Submit Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appoinment Start -->

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
                        elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                        porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur tellus augue,
                        iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                        porttitor, malesuada arcu
                        quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2"
                            href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                class="fab fa-instagram"></i></a>
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
                                    href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                        class="fab fa-instagram"></i></a>
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
                                    href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                        class="fab fa-instagram"></i></a>
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
                                    href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                        class="fab fa-instagram"></i></a>
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
                                    href="https://www.facebook.com/profile.php?id=61565288423127&mibextid=ZbWKwL"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-light mx-1"
                                    href="https://www.instagram.com/invites/contact/?igsh=1lblqa1oyhlej&utm_content=vlf16xe"><i
                                        class="fab fa-instagram"></i></a>
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
