<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Acceuil</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{ asset('main/icon.png') }}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('main/css/styles.css') }}" rel="stylesheet">
</head>

@yield('content')



<!-- FOOTER -->
<!-- Footer  -->
<footer>
    <div class="wrapper__footer bg__footer ">
        <div class=" container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget__footer mb-3">
                        <!-- <h4 class="footer-title">company info</h4> -->
                        <figure>
                            <img src="images/logo-blue.png" alt="" class="logo-footer">
                        </figure>
                        <p>
                            Rethouse Real Estate is a premium Property template based on Bootstrap 4 . Rethouse Real
                            Estate helped thousands of clients to find the right property for their needs.

                        </p>
                    </div>
                    <div class="border-line"></div>
                    <div class="widget__footer">
                        <h4 class="footer-title">follow us </h4>
                        <!-- <p>
                Follow us and stay in touch to get the latest news
            </p> -->
                        <p>
                            <button class="btn btn-social btn-social-o facebook mr-1">
                                <i class="fa fa-facebook-f"></i>
                            </button>
                            <button class="btn btn-social btn-social-o twitter mr-1">
                                <i class="fa fa-twitter"></i>
                            </button>

                            <button class="btn btn-social btn-social-o linkedin mr-1">
                                <i class="fa fa-linkedin"></i>
                            </button>
                            <button class="btn btn-social btn-social-o instagram mr-1">
                                <i class="fa fa-instagram"></i>
                            </button>

                            <button class="btn btn-social btn-social-o youtube mr-1">
                                <i class="fa fa-youtube"></i>
                            </button>
                        </p>
                    </div>
                </div>

                <!-- QUICK LINKS -->
                <div class="col-md-4">
                    <div class="widget__footer">
                        <h4 class="footer-title">Quick Links</h4>
                        <div class="link__category">
                            <ul class="list-unstyled ">
                                <li class="list-inline-item">
                                    <a href="#">Commercial</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">business</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">House</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Apartements</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Residential</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Villa</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Office</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Beverly Hills</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">classic</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">Modern</a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="#">Luxury</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!-- NEWSLETTERS -->
                <div class="col-md-4">
                    <div class="widget__footer">
                        <h4 class="footer-title">newsletter</h4>
                        <!-- Form Newsletter -->

                        <div class="widget__form-newsletter ">
                            <p>

                                Don’t miss to subscribe to our news feeds, kindly fill the form below
                            </p>
                            <div class="mt-3">
                                <input type="text" class="form-control mb-2" placeholder="Your email address">

                                <button class="btn btn-primary btn-block text-capitalize" type="button">subscribe

                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END NEWSLETTER -->
            </div>

        </div>
    </div>


    <!-- Footer Bottom -->
    <div class="bg__footer-bottom ">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <span>
                        © 2020 Rethouse Real Estate - Premium real estate & theme &amp; theme by
                        <a href="#">retenvi.com</a>
                    </span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="#">
                                privacy
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                contact
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                about
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                faq
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->
<!-- END FOOTER -->

<!-- SCROLL TO TOP -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TO TOP -->
<script type="text/javascript" src={{ asset('main/js/index.bundle.js?10eb1139a9f2b8f356b2') }}"></script>
</body>

</html>
