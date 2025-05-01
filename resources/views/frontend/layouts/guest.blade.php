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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/fontawesome/all.min.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
</head>

<body class="bg-light">
    <!--=================================
    Loader -->
    <div id="overlayer"></div>
    <span class="loader">
        <span class="loader-inner"></span>
    </span>

    <!--=================================
    Sign In -->
    <section class="sign-in">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 col-xl-6 col-xxl-7">
                    <div class="sign-in-bg"></div>
                </div>

                @yield('content')

            </div>
        </div>
    </section>
    <!--=================================
    Sign In -->


    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('assets/frontend/js/custom.js') }}"></script>
</body>


</html>