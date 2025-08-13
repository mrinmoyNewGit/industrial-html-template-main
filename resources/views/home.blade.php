<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VMML - Vishal Metal & Mining Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Open Sans', sans-serif;
        }

        /* Dark overlay only on the visible video area */
        .video-dark-overlay {
            position: absolute;
            top: 0;
            /* adjust later if navbar height changes */
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            /* adjust darkness */
            z-index: 2;
        }
    </style>
</head>

<body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.classList.add("loaded");
        });
    </script>

    <!-- Video Banner -->
    <div class="video-banner position-relative">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('video/mining-indusrty.mp4') }}" type="video/mp4" style="background: rgba(0, 0, 0, 0.5);">
            Your browser does not support the video tag.
        </video>
        <div class="video-dark-overlay"></div>
        <!-- Overlayed Header (Topbar + Navbar) -->
        <div class="position-absolute top-0 start-0 w-100" style="z-index: 3;">

            <!-- Topbar -->
            <div class="container-fluid px-0" style="background: rgba(0, 0, 0, 0.5);">
                <div class="row g-0 d-none d-lg-flex">
                    <div class="col-lg-6 ps-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center text-white">
                            <span>Follow Us:</span>
                            <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                            <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                            <span class="fs-5 fw-bold">+012 345 6789</span>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5"
                style="background: rgba(0, 0, 0, 0.3) !important">
                <a href="{{ url('/') }}" class="navbar-brand ps-5 me-0">
                    <img src="{{ asset('img/logo.png') }}" alt="VMML Logo" height="50">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link text-white active">Home</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link text-white">About</a>
                        <a href="{{ url('/service') }}" class="nav-item nav-link text-white">Services</a>
                        <a href="{{ url('/process') }}" class="nav-item nav-link text-white">Process</a>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link text-white">Contact</a>
                    </div>
                </div>
            </nav>

        </div>

        <!-- Video Overlay Content -->
        <div class="video-overlay text-center position-absolute top-50 start-50 translate-middle text-white"
            style="z-index: 2;">
            <p class="text-uppercase text-primary fw-semibold line1" style="color: rgb(36, 5, 122) !important;">Powering
                Alloy with Integrity</p>
            <h1 class="display-3 fw-bold line2" style="color: white;">Vishal Metal & Mining Limited</h1>
            <p class="lead line3">From Mine to Mill – Delivering Ferro Alloys Globally</p>
            <a href="#about" class="btn btn-primary mt-3 px-4 py-2">Explore More</a>
        </div>

    </div>


    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-4 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid bordered-img" src="{{ asset('img/about-1.jpg') }}" alt="About 1">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid bordered-img" src="{{ asset('img/about-2.jpg') }}" alt="About 2">
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
                    <h1 class="display-6 mb-4">Global Leader in the Metal and Mining Industry </h1>
                    <p class="mb-4">Vishal Group is a leading name in the Ferro Alloys industry in India, with over two
                        decades of trusted experience. Operating through Vishal Metal & Mining Limited,
                        we proudly serve a global clientele of more than 150 customers across various countries.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="flex-shrink-0 bg-primary p-4">
                            <h1 class="display-2">10</h1>
                            <h4 class="text-white">Years of</h4>
                            <h5 class="text-white">Experience</h5>
                        </div>
                        <div class="ms-4">
                            <p><i class="fa fa-check text-primary me-2"></i>Silico Manganese (HC/MC/LC)</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Ferro Manganese (HC/MC/LC)</p>
                            <p><i class="fa fa-check text-primary me-2"></i>Ferro Chrome (HC/LC)</p>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i>Ferro Silicon</p>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email us</p>
                                    <h5 class="mb-0">info@example.com</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Call us</p>
                                    <h5 class="mb-0">+012 345 6789</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">10</h1>
                    <span class="fs-5 fw-semi-bold text-white">Years Experience</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">135</h1>
                    <span class="fs-5 fw-semi-bold text-white">Team Members</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">150</h1>
                    <span class="fs-5 fw-semi-bold text-white">Happy Clients</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">1839</h1>
                    <span class="fs-5 fw-semi-bold text-white">Projects Done</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Left Side: Image + Video -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="{{ asset('img/feature.jpg') }}" alt="Iron Ore Mining" style="height:785px">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>

                <!-- Right Side: Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Mining Process</p>
                    <h1 class="display-6 mb-4">Iron Ore Extraction & Processing Steps</h1>
                    <p class="mb-4">Iron ore is extracted from open-pit or underground mines and refined into metallic
                        iron or steel through several stages.</p>

                    <div class="row gy-4">
                        <!-- Step 1 -->
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>1. Mining of Iron Ore</h4>
                                    <span>Extraction of ores such as Hematite, Magnetite, Limonite, and Siderite from
                                        open-pit or underground mines.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>2. Beneficiation Process</h4>
                                    <span>Ore preparation through crushing, grinding, screening, magnetic separation,
                                        gravity separation, and froth flotation.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>3. Concentration & Pelletizing</h4>
                                    <span>Fine ore is concentrated and formed into pellets or sinter for blast furnace
                                        use.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>4. Smelting</h4>
                                    <span>Conversion of iron ore to molten iron via blast furnace or direct reduced iron
                                        (DRI) process.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>5. Steelmaking</h4>
                                    <span>Refining pig iron into steel using Basic Oxygen Furnace (BOF) or Electric Arc
                                        Furnace (EAF).</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Mining Process Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
                <h1 class="display-6 mb-4">We Provide Best Industrial Services</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h4 class="mb-0">Silico Manganese (HC/MC/LC)</h4>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Silico Manganese is an alloy composed primarily of manganese,
                                    silicon, and iron, widely used in steelmaking.
                                    It acts as a deoxidizer and improves the mechanical properties of steel..</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ url('about') }}">Read More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h4 class="mb-0">Ferro Manganese (HC/MC/LC)</h4>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Ferro Manganese is an iron-manganese alloy essential in steelmaking for deoxidizing and
                                    desulfurizing molten steel. It improves tensile strength, toughness, and wear resistance. .</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ url('service') }}">Read More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-3.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('img/service-3.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h4 class="mb-0">Ferro Chrome (HC/LC)</h4>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Ferro Chrome is an alloy of chromium and iron used primarily in stainless steel
                                    production. It imparts corrosion resistance, hardness,
                                    and high-temperature strength to steel..</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ url('service') }}">Read More</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('img/service-2.jpg') }}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h4 class="mb-0">Ferro Silicon</h4>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Ferro Silicon is an alloy of iron and silicon, widely used as a deoxidizer, inoculant,
                                    and alloying element in steel and cast iron production. It helps remove oxygen from molten steel..</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{ url('service') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    <!-- Project Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Suppliers</p>
            <h1 class="display-6 text-white mb-5">We Proudly Source From the Following Trusted Partners</h1>
            <!-- <h6 class="text-white mb-5">At VMML, our ability to ensure consistent quality, reliability,
                and supply volume stems from strong, long-standing partnerships with some of India’s
                most reputable miners and beneficiation operators. These relationships form the backbone
                of our supply chain,
                enabling us to meet customer demands with precision and scale.</h6> -->
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-1.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Pathak Group (Katni)</h5>
                    <h6 class="text-primary mb-0">Capacity: 80,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-2.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Pacific Iron Manufacturing</h5>
                    <h6 class="text-primary mb-0">Capacity: 60,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-3.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Geomin Industries Ltd</h5>
                    <h6 class="text-primary mb-0">Capacity: 50,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-4.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Jain Mines Pvt. Ltd</h5>
                    <h6 class="text-primary mb-0">Capacity: 45,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-5.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Sagar Stone Industries</h5>
                    <h6 class="text-primary mb-0">Capacity: 30,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-6.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">4 Man Industries Pvt. Ltd</h5>
                    <h6 class="text-primary mb-0">Capacity: 25,000 M/T</h6>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{ asset('img/project-6.jpg') }}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Jakhodia Mineral</h5>
                    <h6 class="text-primary mb-0">Capacity: 20,000 M/T</h6>
                </div>
            </a>
        </div>

    </div>
    <!-- Project End -->

    <!-- Testimonial Start -->
    @include('includes.testimonial')
    <!-- Testimonial End -->

    {{-- Footer --}}
    @include('includes.footer')


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const video = document.querySelector("video");
            if (video) {
                video.playbackRate = 0.5; // 0.5 = 50% speed
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            // Sequential animation
            $(".line1").delay(300).animate({
                opacity: 1,
                top: "-=20"
            }, 800);
            $(".line2").delay(1200).animate({
                opacity: 1,
                top: "-=20"
            }, 800);
            $(".line3").delay(2100).animate({
                opacity: 1,
                top: "-=20"
            }, 800);
        });
    </script>

</body>

</html>