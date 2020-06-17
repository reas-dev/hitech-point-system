@extends('layouts.home-layout')
@section('content')

<!-- ========= Start Navbar Section ========= -->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-header">
    <div class="container">
        <a class="navbar-brand text-uppercase" href="#">
            <img src="img/logo-navbar.png" width="35px" class="mr-lg-4" alt="" srcset="">
            Hi-Technology
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item mr-4">
                    <a class="nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Events</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <h6 class="dropdown-header font-weight-bold">Events</h6>
                        <a class="dropdown-item" href="#software-fair">Software Fair</a>
                        <a class="dropdown-item" href="#hardware-fair">Hardware Fair</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#open-talk">Open Talk</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- ========= End Navbar Section ========= -->
<div id="home">
    <!-- ========= Start Header Section ========= -->
    <div id="particles-js" class="bg-header position-relative d-none d-lg-block">
        <div class="position-relative z-1 d-flex justify-content-center">
            <img src="img/header-banner.png" alt="" class="w-100 position-relative b-0">
            <div class="container position-absolute d-none d-lg-block banner-center">
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/isometrix_one.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8">
                        <img src="img/hitech.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="img/isometrix_two.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <video class="w-100 d-block d-md-none" data-aos="fade-right" data-aos-duration="1000" playsinline autoplay muted
        loop>
        <source src="video/teaser.mp4" class="">
    </video>
    <img src="img/line.png" alt="" class="w-100 mt-n2">
    <!-- ========= End Header Section ========= -->

    <!-- ========= Start White Content Section ========= -->
    <div class="container position-relative mt-5 mt-md-8">
        <div class="row justify-content-between">
            <div class="bg d-none d-lg-inline">
                <video class="w-75" data-aos="fade-right" data-aos-duration="1000" playsinline autoplay muted loop>
                    <source src="video/blocks_3.mp4">
                </video>
            </div>

            <div class="col-md-6 pl-md-5 order-lg-2 text-center text-md-left">
                <h1 class="font-weight-bolder" data-aos="fade-up" data-aos-duration="1000">
                    Hi Technology
                </h1>
                <p class="mt-5" data-aos="fade-up" data-aos-duration="1000">
                    <b>Hi Technology</b> merupakan acara festival IT tahunan yang diadakan oleh Himpunan Mahasiswa
                    Teknik Informatika Universitas Dian Nuswantoro. Hi Technology tahun ini bertemakan "<b>The
                        Future Development of Technology</b>". Hi Technology tahun ini mempunyai sub acara seperti
                    Software Fair, Hardware Fair, dan Open Talkshow.
                </p>
            </div>

            <div class="col-md-6 order-lg-1 d-none d-lg-inline">
                <video class="w-100" data-aos="fade-up" data-aos-duration="1000" playsinline autoplay muted loop>
                    <source src="video/teaser.mp4">
                </video>
            </div>
        </div>
    </div>
    <!-- ========= End White Content Section ========= -->
</div>
<div id="events">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#191833" fill-opacity="1"
            d="M0,192L48,202.7C96,213,192,235,288,213.3C384,192,480,128,576,122.7C672,117,768,171,864,192C960,213,1056,203,1152,165.3C1248,128,1344,64,1392,32L1440,0L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
    <!-- ========= Start Dark Content Section ========= -->
    <div class="bg-header text-white">
        <div class="container position-relative">
            <h1 class="display-4 font-weight-bolder text-center" data-aos="fade-up" data-aos-duration="1000">
                Events</h1>
            <div id="software-fair" class=" pt-5"></div>
            <div class="row align-items-center h-100 pb-5 pt-5 pt-md-6">
                <div class="col-md-6 text-center">
                    <img src="img/sf-logo.png" class="img-fluid" alt="" srcset="" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="600">
                </div>
                <div class="col-md-6 text-center">
                    <div class="sub-event">
                        <div class="purple-thing" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                        </div>
                        <h2 class="font-weight-bold" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-delay="600">
                            Software Fair
                        </h2>
                    </div>
                    <p class="mt-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                        Pameran aplikasi yang menampilkan aplikasi-aplikasi karya mahasiswa. Pameran ini akan
                        menampilkan aplikasi Web, Mobile, Game dan Desktop.
                    </p>
                </div>
            </div>
            <div id="hardware-fair" class=" pt-5"></div>
            <div class="row align-items-center h-100 pb-5 pt-5 pt-md-5">
                <div class="col-md-6 order-lg-2 text-center">
                    <img src="img/hf-logo.png" class="img-fluid" alt="" srcset="" data-aos="fade-left"
                        data-aos-duration="1000" data-aos-delay="600">
                </div>
                <div class="col-md-6 order-lg-1 text-center">
                    <div class="sub-event">
                        <div class="purple-thing" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                        </div>
                        <h2 class="font-weight-bold" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                            Hardware Fair
                        </h2>
                    </div>
                    <p class="mt-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                        Pameran teknologi tentang Hardware yang akan menampilkan karya dari mahasiswa seperti IoT dan
                        sebagainya.
                    </p>
                </div>
            </div>
            <div id="open-talk" class=" pt-5"></div>
            <div class="row align-items-center h-100 mt-5 mt-md-5">
                <div class="col-md-6 text-center">
                    <img src="img/ot-logo.png" class="img-fluid" alt="" srcset="" data-aos="fade-right"
                        data-aos-duration="1000" data-aos-delay="600">
                </div>
                <div class="col-md-6 text-center">
                    <div class="sub-event">
                        <div class="purple-thing" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                        </div>
                        <h2 class="font-weight-bold" data-aos="fade-right" data-aos-duration="1000"
                            data-aos-delay="600">
                            Open Talk
                        </h2>
                    </div>
                    <p class="mt-5 mb-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="600">
                        Di sesi Open Talk ini ada menghadirkan beberapa Pemateri yang nantinya akan membahas tentang
                        persoalan - persoalan teknologi dan berkonsep menarik dengan melibatkan interaksi dari para
                        penonton.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#191833" fill-opacity="1"
        d="M0,224L48,240C96,256,192,288,288,293.3C384,299,480,277,576,250.7C672,224,768,192,864,197.3C960,203,1056,245,1152,245.3C1248,245,1344,203,1392,181.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
    </path>
</svg>
<!-- ========= End Dark Content Section ========= -->

<!-- ========= Start White Content Section ========= -->
<div id="register">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="display-4 text-center font-weight-bolder" data-aos="fade-up" data-aos-duration="1000">
                    Register</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-sf-tab" data-toggle="pill" href="#pills-sf" role="tab"
                            aria-controls="pills-sf" aria-selected="true" data-aos="fade-up"
                            data-aos-duration="1000">Software Fair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-hf-tab" data-toggle="pill" href="#pills-hf" role="tab"
                            aria-controls="pills-hf" aria-selected="false" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">Hardware Fair</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-ot-tab" data-toggle="pill" href="#pills-ot" role="tab"
                            aria-controls="pills-ot" aria-selected="false" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">Open Talkshow</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    @include('layouts.register.software-fair-form')
                    @include('layouts.register.hardware-fair-form')
                    @include('layouts.register.open-talk-form')
                </div>
            </div>
        </div>
    </div>
    <!-- ========= End White Content Section ========= -->
</div>

<!-- ========= Start Dark Footer Section ========= -->
<footer class="bg-header p-3 mt-4" id="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="row h-100 align-items-center">
                    <div class="col text-center">
                        <img src="img/logo-white.png" class="img-fluid" alt="">
                        <p class="copyright-text text-white mt-3 mb-0">© 2020 Made By
                            <a href="https://hmtiudinus.org" class="text-decoration-none" target="_blank">Project
                                Labs
                                HMTI</a>
                        </p>
                    </div>
                </div>
                <div class="row text-white">
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ========= End Dark Footer Section ========= -->
@endsection
