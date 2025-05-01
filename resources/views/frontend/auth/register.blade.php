@extends('frontend.layouts.guest')

@section('content')
<div class="col-lg-6 col-xl-6 col-xxl-5">
    <div class="sign-in-box text-center">
        <a class="navbar-brand mb-4 d-block" href="index.html">
            <img class="img-fluid" src="images/logo-dark.png" alt="">
        </a>
        <div class="login-social-media">
            <a class="btn google mb-3" href="#"><i class="fa-brands fa-google me-3"></i>Google</a>
            <a class="btn twitter mb-3" href="#"><i class="fa-brands fa-twitter me-3"></i>Twitter</a>
            <a class="btn Facebook mb-3" href="#"><i class="fa-brands fa-facebook-f me-3"></i>Facebook</a>
        </div>

        <span class="text-center pt-1 mb-4 d-block login-with">
            <span>OR Create New Account</span>
        </span>


        <!-- register form -->
        <livewire:frontend.auth.register />
        <!-- register form -->

    </div>
</div>
@endsection