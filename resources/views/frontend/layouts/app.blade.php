<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Nezzy - News and Magazine HTML Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nezzy - News and Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome/all.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />

    @livewireStyles
</head>

<body>

    <!--=================================
  Loader -->
    <div x-data="{ loading: false, shown: false }"
        x-init="
        Livewire.hook('message.sent', () => {
            if (!shown) {
                loading = true;
                shown = true;
            }
        });
        Livewire.hook('message.processed', () => loading = false);
     ">

        <div id="overlayer" x-show="loading"></div>
        <div x-show="loading"
            class="loader">
            <span class="loader-inner"></span>
        </div>


    </div>

    @php
    $theme = 6;
    @endphp

    <!-- Header -->
    @if($theme == 1)
    <livewire:frontend.header.header-one.header />
    @elseif($theme == 2)
    <livewire:frontend.header.header-two.header />
    @elseif($theme == 3)
    <livewire:frontend.header.header-three.header />
    @elseif($theme == 4)
    <livewire:frontend.header.header-four.header />
    @elseif($theme == 5)
    <livewire:frontend.header.header-five.header />
    @elseif($theme == 6)
    <livewire:frontend.header.header-six.header />
    @endif
    <!--  Header -->

    <!-- side-menu -->
    <livewire:frontend.theme.side-menu />
    <!-- side-menu -->

    <!-- Search -->
    <livewire:frontend.theme.search />
    <!-- Search -->

    @yield('content')

    <!--=================================
  Footer -->
    <livewire:frontend.footer.footer-one.index />
    <!--=================================
    Footer -->

    <!--=================================
  Modal -->
    <div class="modal modal-xl fade news-popup" id="promo-popup" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> <i class="fa-solid fa-xmark"></i> </button>
                <div class="modal-body">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-6">
                            <div class="popup-bg"> <img class="img-fluid" src="{{ url('assets/frontend/images/bg/promo-popup-bg.jpg') }}" alt="#"> </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="popup-content">
                                <div class="newsletter">
                                    <h4 class="title">Subscribe today</h4>
                                    <p>Get our latest news straight into your inbox.</p>
                                    <div class="newsletter-box">
                                        <input type="email" class="form-control" placeholder="Enter Your Email ID">
                                        <button type="submit" class="btn submit-btn">Subscribe</button>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault"> You are agreeing to our terms. </label>
                                    </div>
                                    <ul class="social-icons">
                                        <li>
                                            <a href="#" class="social-icon facebook"> <i class="fa-brands fa-facebook-f"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-icon twitter"> <i class="fa-brands fa-twitter"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-icon linkedin"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                        </li>
                                        <li>
                                            <a href="#" class="social-icon">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
  Modal -->

    <!--=================================
  Back To Top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!--=================================
  Back To Top -->

    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('assets/frontend/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>

    @livewireScripts
</body>


</html>