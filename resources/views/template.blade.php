<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>White Travel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-black-50 text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <p><i class="fa fa-envelope mr-2"></i>whitetravel@gmail.com</p>
                        <p class="text-body px-3">|</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+57 321 3796235</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-primary px-3" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-primary px-3" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-primary px-3" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-primary pl-3" href="#">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">WHITE</span>TRAVEL</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('welcome') }}" class="nav-item nav-link active">Inicio</a>
                        <a href="{{ route('hoteles') }}" class="nav-item nav-link">Hoteles</a>
                        <a href="{{ route('restaurantes') }}" class="nav-item nav-link">Restaurantes</a>
                        <a href="{{ route('sitios') }}" class="nav-item nav-link">Sitios turísticos</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carrusel_1.jpg" alt="Image"
                        style="max-height: 550px; max-width: 100%">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="letter-spacing: 3px;">Lo mejor de
                                Popayán</h4>
                            <h1 class="display-3 text-white mb-md-4">En un sólo lugar</h1>
                            <a href="{{ route('question1') }}" class="btn btn-primary py-md-3 px-md-5 mt-2"
                                style="border-radius: 10px">¡Mejora tu experiencia
                                ahora!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carrusel_2.jpg" alt="Image"
                        style="max-height: 550px; max-width: 100%">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3" style="letter-spacing: 3px;">Lo mejor de
                                Popayán</h4>
                            <h1 class="display-3 text-white mb-md-4">En un sólo lugar</h1>
                            <a href="{{ route('question1') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">¡Explora
                                ahora!</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carrusel_3.jpg" alt="Image"
                        style="max-height: 550px; max-width: 100%">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Lo mejor de Popayán</h4>
                            <h1 class="display-3 text-white mb-md-4" style="letter-spacing: 10px;">En un sólo lugar
                            </h1>
                            <a href="{{ route('question1') }}" class="btn btn-primary py-md-3 px-md-5 mt-2">¡Explora
                                ahora!</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- main content -->
    <div class="card-body">
        @section('contenido')

        @show
    </div>

    <!-- End content-->

    {{-- Chat bot --}}
    <script>
        window.addEventListener('mouseover', initLandbot, {
            once: true
        });
        window.addEventListener('touchstart', initLandbot, {
            once: true
        });
        var myLandbot;

        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script');
                s.type = 'text/javascript';
                s.async = true;
                s.addEventListener('load', function() {
                    var myLandbot = new Landbot.Livechat({
                        configUrl: 'https://storage.googleapis.com/landbot.site/v3/H-2141462-4AB71THSSNBUR1W8/index.json',
                    });
                });
                s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
                var x = document.getElementsByTagName('script')[0];
                x.parentNode.insertBefore(s, x);
            }
        }
    </script>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">WHITE</span>TRAVEL</h1>
                </a>

                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Siguenos en</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros Servicios</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{ route('hoteles') }}"><i class="fa fa-angle-right mr-2"></i>Hoteles</a>
                    <a class="text-white-50 mb-2" href="{{ route('restaurantes') }}"><i class="fa fa-angle-right mr-2"></i>Restaurantes</a>
                    <a class="text-white-50 mb-2" href="{{ route('sitios') }}"><i class="fa fa-angle-right mr-2"></i>Sitios Turisticos</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Enlaces Utiles</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="https://www.popayan.gov.co/Paginas/default.aspx#gsc.tab=0"><i class="fa fa-angle-right mr-2"></i>Alcaldia de Popayan</a>
                    <a class="text-white-50 mb-2" href="https://www.procesionespopayan.com/"><i
                            class="fa fa-angle-right mr-2"></i>Semana Santa Popayan</a>
                    <a class="text-white-50 mb-2" href="https://www.booking.com/"><i class="fa fa-angle-right mr-2"></i>Booking</a>
                    <a class="text-white-50 mb-2" href="https://descubrepopayan.com/"><i class="fa fa-angle-right mr-2"></i>Historia</a>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contactanos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Colombia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+57 3245 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>whitetravel@gmail.com</p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Popayan, Cauca</h6>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50"> &copy; <a href="#">White Travel 2024</a>. Todos los derechos reservados</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">Diseñado por <a href="https://htmlcodex.com">Softlab</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
