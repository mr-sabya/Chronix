<div class="topbar d-none d-md-block">
    <div class="container">
        <div class="topbar-inner">
            <div class="row">
                <div class="col-12">
                    <div class="d-lg-flex align-items-center text-center">
                        <div class="topbar-left mb-2 mb-lg-0">
                            <div class="topbar-date d-inline-flex"> <span class="date"><i class="fa-solid fa-calendar-days"></i> Sunday, March, 2022</span> </div>
                            <div class="me-auto d-inline-flex">
                                <ul class="list-unstyled top-menu">
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Write Us</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="topbar-right ms-auto justify-content-center"> <span class="user">
                                @if(Auth::user())
                                <a href="{{ route('profile.index') }}" wire:navigate>
                                    <img src="{{ url('assets/frontend/images/user.png') }}" alt="#">
                                    {{ Auth::user()->name }}
                                </a>
                                @else
                                <a href="{{ route('login') }}" wire:navigate>
                                    <img src="{{ url('assets/frontend/images/user.png') }}" alt="#">
                                    Sign In
                                </a>
                                @endif
                            </span>
                            <div class="dropdown right-menu d-inline-flex news-language">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="img-fluid country-flag" src="{{ url('assets/frontend/images/country-flags/02.jpg') }}" alt=""> English<i class="fas fa-chevron-down fa-xs"></i> </a>
                                <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="{{ url('assets/frontend/images/country-flags/02.jpg') }}" alt="">English</a>
                                    <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="{{ url('assets/frontend/images/country-flags/09.jpg') }}" alt="">Francais</a>
                                    <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="{{ url('assets/frontend/images/country-flags/11.jpg') }}" alt="">Deutsch</a>
                                    <a class="dropdown-item" href="#"><img class="img-fluid country-flag" src="{{ url('assets/frontend/images/country-flags/12.jpg') }}" alt="">Italiano</a>
                                </div>
                            </div>
                            <div class="social d-inline-flex">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"> <i class="fa-brands fa-facebook-f"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa-brands fa-linkedin-in"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fab fa-instagram"></i> </a>
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