<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-top-left">
                        <div class="close-header-top xl-none">
                            <button type="button"><i class="las la-times"></i></button>
                        </div>
                        <div class="header-contact">
                            <p><i class="ri-map-pin-fill"></i> Sector 59, Noida, UP</p>
                        </div>
                        {{-- <div class="header-contact">
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a2cac7cececde2c7c1cdd7d08cc1cdcf">
                                <i class="ri-mail-send-line"></i> <span class="__cf_email__"
                                    data-cfemail="761f1810193613151903045815191b">[email&#160;protected]</span></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-top-right">
                        <div class="header-social">
                            <span>Follow us :</span>
                            <ul class="social-profile style3">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i>
                                    </a></li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://instagram.com"> <i class="ri-instagram-line"></i>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 xl-none">
                    <div class="header-search">
                        <form action="index-2.html#">
                            <div class="form-group">
                                <input type="search" placeholder="Search Here ...">
                                <button type="submit"> <i class="ri-search-eye-line"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-5 order-lg-1 order-md-1 order-1">
                    <div class="logo">
                        <a href="index.html">
                            <img class="logo-light" src="{{ asset('assets/img/logo.png') }}" alt="Image">
                            <img class="logo-dark" src="{{ asset('assets/img/logo-white.png') }}" alt="Image">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-5 col-7 order-lg-2 order-md-3 order-3">
                    <div class="main-menu-wrap style1">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu" class="text-center">
                            <ul class="main-menu ">
                                <li class="">
                                    <a class="{{ request()->routeIs('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}">HOME</a>
                                </li>
                                <li class="has-children">
                                    <a href="index-2.html#">COURSES</a>
                                    <ul class="sub-menu">
                                        <li><a href="course.html">COURSES</a></li>
                                        <li><a href="course-details.html">COURSE DETAILS</a></li>
                                        <li class="has-children">
                                            <a href="index-2.html#">INSTRUCTOR</a>
                                            <ul class="sub-menu">
                                                <li><a href="events.html">INSTRUCTORS</a></li>
                                                <li><a href="event-details.html">INSTRUCTOR DETAILS</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a class="{{ request()->routeIs('about') ? 'active' : '' }}"
                                        href="{{ route('about') }}">ABOUT</a>
                                </li>
                                <li class="">
                                    <a class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                                        href="{{ route('contact') }}">CONTACT</a>
                                </li>
                                <li class="">
                                    <a class="{{ request()->routeIs('testimonial') ? 'active' : '' }}"
                                        href="{{ route('testimonial') }}">TESTIMONIAL</a>
                                </li>
                                <li class="">
                                    <a class="{{ request()->routeIs('blogs') ? 'active' : '' }}"
                                        href="{{ route('blogs') }}">BLOGS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar-wrap">
                        <div class="sidebar-menu xl-none">
                            <i class="ri-equalizer-line"></i>
                        </div>
                        <div class="mobile-top-bar xl-none">
                            <i class="ri-settings-3-line"></i>
                        </div>
                        <div class="mobile-menu xl-none">
                            <a href='javascript:void(0)'><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3  order-lg-3 order-md-2">
                    <div class="header-menu-wrap">
                        <div class="sidebar-menu md-none">
                            <i class="ri-equalizer-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
