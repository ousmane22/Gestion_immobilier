@extends('layouts.main')

@section('content')


    <!-- HEADER -->
    <header class="jumbotron" style="background-image: url({{ asset('main/images/mybg.jpg') }}); 
                            backgrounbd-size:cover;background-position:center;">
        <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="/homepage-v1.html">
                    {{-- <img src="{{ asset('main/images/logo-blue.png') }}" alt="">
                    <img src="{{ asset('main/images/logo-blue-stiky.png') }}" alt=""> --}}
                    <h4 class="text-white">SENELOCA</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav99">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>

                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Inscription</a></li>

                    </ul>
                    <div class="top-search navigation-shadow">
                        <div class="container">
                            <div class="input-group ">
                                <form action="#">

                                    <div class="row no-gutters mt-3">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                type="search" value="" placeholder="Search " id="example-search-input4">
                                        </div>
                                        <div class="col-auto">
                                            <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                                href="/search-result.html">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- HERO -->
        <div class="wrap__intro d-flex align-items-md-center">
            <div class="container">
                <div class="row align-items-center justify-content-start flex-wrap">
                    <div class="col-lg-12 mx-auto">
                        <div class="wrap__intro-heading" data-aos="fade-up">

                            <h1 class="text-capitalize">
                                Find your dream Flat </h1>
                            <p>Your Property, Our Priority .Chercher votre appartement sans vous déplacer</p>

                            <div class="bg__overlay-black p-4">
                                <div class="search__property">
                                    <div class="position-relative">
                                        <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-start" id="pills-tab"
                                            role="tablist">
                                            {{-- <li class="nav-item mr-1">
                                                <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy"
                                                    role="tab" aria-controls="buy" aria-selected="true">Buy </a>
                                            </li> --}}
                                            <li class="nav-item mr-1">
                                                <a class="nav-link" id="rent-tab" data-toggle="pill" href="#rent" role="tab"
                                                    aria-controls="rent" aria-selected="false">Rent</a>
                                            </li>

                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                                aria-labelledby="buy-tab">
                                                <div class=" search__container">
                                                    <div class="row input-group no-gutters">
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected>Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
                                                                <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                                <div class="search__container">
                                                    <div class="row input-group no-gutters">
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option selected>Type Property</option>
                                                                <option>House</option>
                                                                <option>Apartement </option>
                                                                <option>Hotel</option>
                                                                <option>Residential</option>
                                                                <option>Land</option>
                                                                <option>Luxury</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Area From">Area From </option>
                                                                <option>1500</option>
                                                                <option>1200</option>
                                                                <option>900</option>
                                                                <option>600</option>
                                                                <option>300</option>
                                                                <option>100</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bedrooms">Bedrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>
                                                                <option>6</option>
                                                                <option>7</option>
                                                                <option>8</option>
                                                                <option>9</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Bathrooms">Bathrooms</option>
                                                                <option>1</option>
                                                                <option>2</option>
                                                                <option>3</option>
                                                                <option>4</option>
                                                                <option>5</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <select class="select_option form-control" name="select">
                                                                <option data-display="Locations">Locations</option>
                                                                <option>United Kingdom</option>
                                                                <option>American Samoa</option>
                                                                <option>Belgium</option>
                                                                <option>Canada</option>
                                                                <option>Delaware</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-lg-2 input-group-append">
                                                            <button class="btn btn-primary btn-block" type="submit">
                                                                <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                            </button>
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
                </div>
            </div>
        </div>
        <!-- END HERO -->
    </header>
    <!-- END HEADER -->


    <!-- POPULAR CITY -->
    <section class="popular__city-large">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title__head-v2">
                        <h2 class="text-capitalize">popular city</h2>
                        <p class="text-capitalize mb-0">Find Properties In These Cities.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover-style-v3">
                            <div class="card__image-hover-style-v3-thumb h-230">
                                <img src="{{ asset('main/images/600x400.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="overlay">
                                <div class="desc">
                                    <h6 class="text-capitalize">rome</h6>
                                    <p class="text-capitalize">70 properties</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover-style-v3">
                            <div class="card__image-hover-style-v3-thumb h-230">
                                <img src="{{ asset('main/images/600x400.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="overlay">
                                <div class="desc">
                                    <h6 class="text-capitalize">australia</h6>
                                    <p class="text-capitalize">70 properties</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover-style-v3">
                            <div class="card__image-hover-style-v3-thumb h-230">
                                <img src="{{ asset('main/images/600x400.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="overlay">
                                <div class="desc">
                                    <h6 class="text-capitalize">indonesia</h6>
                                    <p class="text-capitalize">70 properties</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <!-- CARD IMAGE -->
                    <a href="#">
                        <div class="card__image-hover-style-v3">
                            <div class="card__image-hover-style-v3-thumb h-230">
                                <img src="{{ asset('main/images/600x400.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="overlay">
                                <div class="desc">
                                    <h6 class="text-capitalize">paris</h6>
                                    <p class="text-capitalize">70 properties</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END POPULAR CITY -->
@endsection
