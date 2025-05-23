<nav class="navbar navbar-expand-lg">
    <div class="container position-relative">
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="{{ url('assets/frontend/images/logo-dark.png') }}" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" href="{{ route('home') }}" wire:navigate>Home</a> </li>

                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown02" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown02">
                        <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                        <li><a class="dropdown-item" href="team.html">Team</a></li>
                        <li><a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
                        <li><a class="dropdown-item" href="404.html">404</a></li>
                        <li><a class="dropdown-item" href="sign-in.html">Sign in</a></li>
                        <li><a class="dropdown-item" href="sign-up.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown03" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Features<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu megamenu dropdown-menu-md" aria-labelledby="navbarDropdown03">
                        <li>
                            <div class="row">
                                <div class="col-sm-6"> <span class="mb-3 nav-title mt-0"> Pages</span>
                                    <ul class="list-unstyled mt-lg-3">
                                        <li><a class="dropdown-submenu" href="author.html">Author</a></li>
                                        <li><a class="dropdown-submenu" href="blog-single-01.html">Blog single 01</a></li>
                                        <li><a class="dropdown-submenu" href="blog-single-02.html">Blog single 02</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6"> <span class="mb-3 nav-title mt-0"> Pages</span>
                                    <ul class="list-unstyled mt-lg-3">
                                        <li><a class="dropdown-submenu" href="blog-single-03.html">Blog single 03</a></li>
                                        <li><a class="dropdown-submenu" href="blog-single-04.html">Blog single 04</a></li>
                                        <li><a class="dropdown-submenu" href="blog-single-05.html">Blog single 05</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown mega-menu">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown">Categories<i class="fas fa-chevron-down fa-xs"></i></a>
                    <ul class="dropdown-menu megamenu megamenu-fullwidth">
                        <li class="nav-item selected">
                            <a class="dropdown-item" href="categories-style-01.html">Technology</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/technology/menu/01.jpg') }}" alt=""> </div> <span class="badge badge-large bg-primary">Vehicle</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-01.html">Everyday vehicles that aren’t</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 5 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/technology/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-blue">Touchless</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-01.html">Building Networks for People.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 15 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/technology/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Gadgets</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-01.html">Only high quality is available here</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 20 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/technology/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-yellow">Earbuds</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-01.html">Better sound through research.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 10 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/technology/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">eyeprint</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-01.html">Miracles in print</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 20 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="categories-style-02.html">Sport</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image">
                                                <img class="img-fluid" src="{{ url('assets/frontend/images/category/sport/menu/01.jpg') }}" alt="">
                                            </div>
                                            <span class="badge badge-large bg-orange">Cycling</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title">
                                                    <a href="categories-style-02.html">Champions are made in practice.</a>
                                                </h6>
                                                <div class="blog-post-time">
                                                    <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 7 2022</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/sport/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-primary">Pool</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-02.html">Fight till victory</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 15 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/sport/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-purple">Rugby</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-02.html">Pain is temporary, pride is forever.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 25 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/sport/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Boxing</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-02.html">Defend til the End.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 2 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/sport/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-yellow">Volleyball</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-02.html">Meet me at the net.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 16 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="categories-style-03.html">Entertainment</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/entertainment/menu/01.jpg') }}" alt=""> </div> <span class="badge badge-large bg-orange">Nightclubs</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-03.html">The power of positive music</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 18 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/entertainment/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-blue">Dance</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-03.html">Dance is a stress reliever</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 3 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/entertainment/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-primary">Music</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-03.html">Where words fail, music speaks.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 4 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/entertainment/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Movies</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-03.html">Enjoy the show</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 14 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/entertainment/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-purple">Video Games</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-03.html">Lets you Play Better</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jun 5 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="categories-style-04.html">Politician</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/politician/menu/01.jpg') }}" alt=""> </div> <span class="badge badge-large bg-primary">Lider</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-04.html">Yes, Of Course We Can, Right?</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 12 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/politician/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Politician</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-04.html">Choose Don’t Lose!</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 15 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/politician/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-blue">Events</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-04.html">Your Voice. Your Choice.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 9 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/politician/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-pink">People</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-04.html">Workers Of The World, Unite!</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jun 19 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/politician/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-yellow">Candidates</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-04.html">A Time For Greatness</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jul 1 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="categories-style-05.html">Magazine</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/magazine/menu/01.jpg') }}" alt=""> </div> <span class="badge badge-large bg-primary">Fashion</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-05.html">Get to know the world.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 10 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/magazine/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Travel</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-05.html">Read Travel. Be the Traveler.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 8 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/magazine/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-skyblue">Photography</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-05.html">Lets you Read Life.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 15 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/magazine/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-orange">Model</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-05.html">Read your Best Life Stories.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>jun 2 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/magazine/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-purple">Style</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-05.html">Understanding Comes With Time.</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jul 6 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="categories-style-06.html">Lifestyle</a>
                            <div class="inner-mega-menu">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/life-style/menu/01.jpg') }}" alt=""> </div> <span class="badge badge-large bg-skyblue">Lifestyle</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-06.html">The best look anytime anywhere</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Jan 26 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/life-style/menu/02.jpg') }}" alt=""> </div> <span class="badge badge-large bg-orange">Fashion</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-06.html">Fashion never sleeps so</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Feb 14 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/life-style/menu/03.jpg') }}" alt=""> </div> <span class="badge badge-large bg-red">Beauty</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-06.html">Life is a party, dress like it</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Mar 13 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/life-style/menu/04.jpg') }}" alt=""> </div> <span class="badge badge-large bg-blue">Model</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-06.html">Smiles are always in fashion!</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>Apr 20 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="blog-post post-style-02 mb-3">
                                            <div class="blog-image"> <img class="img-fluid" src="{{ url('assets/frontend/images/category/life-style/menu/05.jpg') }}" alt=""> </div> <span class="badge badge-large bg-purple">Style</span>
                                            <div class="blog-post-details">
                                                <h6 class="blog-title"><a href="categories-style-06.html">Fashion is a style of life</a></h6>
                                                <div class="blog-post-time"> <a href="#"><i class="fa-solid fa-calendar-days"></i>May 21 2022</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown05" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Shop<i class="fas fa-chevron-down fa-xs"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown05">
                        <li><a class="dropdown-item" href="shop.html">Shop</a></li>
                        <li><a class="dropdown-item" href="shop-single.html">Shop Single</a></li>
                        <li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
                        <li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
                    </ul>
                </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('page.about') }}" wire:navigate>About Us</a> </li>
            </ul>
        </div>
        <div class="add-listing">
            <div class="weather">
                <img class="img-fluid weather-icon" src="{{ url('assets/frontend/images/weather-icon.png') }}" alt="">
                <span class="weather-temprecher">25</span>
                <span class="weather-address">
                    <span class="place">NEW YORK,</span>
                    <span class="date">Mon. 10 jun 2022</span>
                </span>
            </div>
            <div id="weathertime" class="clock"></div>
            <div class="header-search">
                <div class="search">
                    <a href="#search"> <i class="fa-solid fa-magnifying-glass"></i> </a>
                </div>
            </div>
            <div class="side-menu d-none d-lg-inline-block">
                <a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"> <i class="fa-solid fa-align-right"></i> </a>
            </div>
        </div>
    </div>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa-solid fa-align-right"></i> </button>
</nav>