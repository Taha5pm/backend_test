<!DOCTYPE html>
<html lang="en">

<head>
    <title>Warehouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts\icomoon\style.css">

    <link rel="stylesheet" href="{{ asset('material') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('material') }}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('material') }}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{ asset('material') }}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{ asset('material') }}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{ asset('material') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('material') }}/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-xl-2">
                        <h1 class="mb-0 site-logo m-0 p-0"><a href="{{ route('web_home') }}"
                                class="mb-0">Warehouse</a></h1>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#listings-section" class="nav-link active">Products</a></li>
                                <li><a href="#about-section" class="nav-link">About</a></li>
                            </ul>
                        </nav>
                    </div>


                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#"
                            class="site-menu-toggle js-menu-toggle text-white float-right"><span
                                class="icon-menu h3"></span></a></div>

                </div>
            </div>

        </header>


        <div class="site-blocks-cover overlay" style="background-image: url({{ asset('material') }}/img/hero_1.jpg);"
            data-aos="fade" id="home-section">


            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 mt-lg-5 text-center">
                        <h1>ANYTHING YOU NEED</h1>
                        <p class="mb-5">JUST IN ONE CLICK .</p>

                    </div>
                </div>
            </div>

            <a href="#listings-section" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
        </div>


        <div class="site-section" id="listings-section">
            <div class="container">

                <div class="row">
                    <div class="col-md-3 order-1 order-md-2">
                        <div class="mb-5">
                            <h3 class="text-black mb-4 h5 font-family-2">Filter</h3>
                            <form action="#">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <span class="icon icon-keyboard_arrow_down"></span>
                                        <select class="form-control px-3">
                                            <option value="">By Date</option>
                                            <option value="">Trending</option>
                                            <option value="">Best</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <span class="icon icon-keyboard_arrow_down"></span>
                                        <select class="form-control px-3">
                                            <option value="">computer devices</option>
                                            <option value="">Library material</option>
                                            <option value="">House tools</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="mb-5">
                            <h3 class="text-black mb-4 h5 font-family-2">Filter by Price</h3>
                            <div id="slider-range" class="border-primary"></div>
                            <input type="text" name="text" id="amount"
                                class="form-control border-0 pl-0 bg-white" disabled="" />
                        </div>
                    </div>
                    <div class="col-md-9 order-2 order-md-1">
                        <div class="row large-gutters">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                                    <div class="ftco-media-1">
                                        <div class="ftco-media-1-inner">

                                            <div class="ftco-media-details">
                                                <h3>{{ $product->name }}</h3>
                                                <p>{{ $product->model }}</p>
                                                <p>{{ $product->description }}</p>
                                                <strong>{{ $product->price }} $</strong>
                                                <p> <a
                                                        href="{{ route('pro_det', $product->p_serial_number) }}">Details</a>
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>



                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-9">
                        <div class="custom-pagination text-center">

                            <a href="{{ route('web_home') }}">1</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer" id='about-section'>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-5">
                                <h2 class="footer-heading mb-4">About Us</h2>
                                <p>Warehouse is a website to help you navigate through products and purches the one you
                                    need with many options,also you can be a supplier and upload your products.</p>
                            </div>
                            <div class="col-md-3 mx-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-4">
                            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
                            <form action="#" method="post" class="footer-subscribe">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary text-black" type="button"
                                            id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="">
                            <h2 class="footer-heading mb-4">Follow Us</h2>
                            <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                            <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                        </div>


                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                            <p class="copyright"><small>&copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> Warehouse. All Rights Reserved. Design by <a
                                        href="https://free-template.co" target="_blank"></a>Warehouse.Inc
                                </small></p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div> <!-- .site-wrap -->

    <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a>

    <script src="{{ asset('material') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('material') }}/js/jquery-ui.js"></script>
    <script src="{{ asset('material') }}/js/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('material') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('material') }}/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('material') }}/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('material') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('material') }}/js/aos.js"></script>
    <script src="{{ asset('material') }}/js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('material') }}/js/jquery.sticky.js"></script>


    <script src="{{ asset('material') }}/js/main.js"></script>

</body>

</html>
