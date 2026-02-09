@extends('layout.app')
@section('content')
    <section class="breadcrumb-wrap bg-f br-bg-1">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>About us</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb end -->
    <!-- About Section Start -->
    <section class="about-wrap style2 ptb-100">
        <div class="about-img">
            <img src="{{ asset('assets/img/about/about-10.png') }}" alt="Image">
        </div>
        <div class="about-content">
            <div class="section-title text-left style1">
                <span>About us</span>
                <h2>Welcome To Ecour Learning</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does the eiusmod tempor incididunt ut
                    labore et dolore magna aliqua.</p>
                <div class="about-subpara">
                    <h5><span> <img src="{{ asset('assets/img/about/goal.svg') }}" alt="Image"></span>Ecour Is The Right
                        Place Where You
                        Can Achieved</h5>
                    <p>Lorem ipsum dolor sit amet consecteur adipsicing elit ed does the eiusmod tempor incidiun abore et
                        dolore magna aliqua. It Integer mauris eu nibh euismod gravida. Duis ac. </p>
                </div>
                <ul class="about-features-list style2">
                    <li> <i class="ri-login-circle-line"></i> Administer With Case</li>
                    <li> <i class="ri-login-circle-line"></i> Save Time With Automation</li>
                    <li> <i class="ri-login-circle-line"></i> 5000 Online Courses</li>
                    <li> <i class="ri-login-circle-line"></i> Refund If not Satisfied</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- About Section end -->
    <!-- Promo banner section start -->
    <div class="promo-banner-wrap style4 promo-bg-1 bg-f ptb-100">
        <div class="overlay bg-midnight op-8"></div>
        <div class="promo-circle-shape md-none">
            <img src="{{ asset('assets/img/promo/promo-circle-shape.svg') }}" alt="Image">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="promo-content  text-center">
                        <h2 class="text-white">Trusted By 10,000 + Organization</h2>
                        <p class="text-white">Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius, turpis
                            et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer
                            in odio mauris eu nibh euismod gravida.</p>
                        <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promo banner section end -->

    <!-- Team Section Start -->
    <section class="team-wrap pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Make Communication</span>
                        <h2>Our Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/img/team/team-member-1.jpg') }}" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Tony Stark</h4>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/img/team/team-member-2.jpg') }}" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Mark Toen</h4>
                            <p>Co-Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/img/team/team-member-3.jpg') }}" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Phil Heath</h4>
                            <p>Vice President</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-member">
                        <div class="team-member-img">
                            <img src="{{ asset('assets/img/team/team-member-4.jpg') }}" alt="Image">
                            <ul class="social-profile style1">
                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a>
                                </li>
                                <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-member-info">
                            <h4>Jhon Doe</h4>
                            <p>Instructor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section end -->
    <!-- Testimonial section Start -->
    <section class="testimonial-wrap bg-f testimonial-bg-1 ptb-100">
        <div class="overlay bg-midnight op-8"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style2 mb-40 text-center">
                        <span>Testimonials</span>
                        <h2>What They Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-slider-one swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/testimonial/client-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Alina Marrio</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random
                                            text blocks for users with many customization options that allow the user to get
                                            exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/testimonial/client-2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>David Jack</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random
                                            text blocks for users with many customization options that allow the user to get
                                            exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/testimonial/client-3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Ema Watson</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random
                                            text blocks for users with many customization options that allow the user to get
                                            exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-img">
                                        <img src="{{ asset('assets/img/testimonial/client-4.jpg') }}" alt="Image">
                                    </div>
                                    <div class="client-name">
                                        <h5>Jhon Doe</h5>
                                        <ul class="rating">
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-fill"></i> </li>
                                            <li> <i class="ri-star-line"></i> </li>
                                        </ul>
                                    </div>
                                    <div class="client-quote">
                                        <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random
                                            text blocks for users with many customization options that allow the user to get
                                            exactly what they need. It allows you to break down </p>
                                    </div>
                                    <div class="quote-icon">
                                        <i class="ri-double-quotes-r"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial section end -->
    <!-- Blog Section Start -->
    <section class="blog-wrap pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Our Blogs</span>
                        <h2>Latest News & Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>25</span>Feb
                                    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                </h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">This is yet another impressive Lorem generator
                                    offer</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.
                            </p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{ asset('assets/img/blog/author-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Mark John</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>04</span>Feb
                                    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                </h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">Role Of A Online Instructor In Competitive
                                    Education System</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.
                            </p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{ asset('assets/img/blog/author-2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Phill Heath</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="blog-card">
                        <a href="blog-details-right-sidebar.html" class="blog-img">
                            <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="Image">
                        </a>
                        <div class="blog-info">
                            <div class="blog-date">
                                <h6><span>12</span>Jan
                                    <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                </h6>
                            </div>
                            <h3><a href="blog-details-right-sidebar.html">Top Online Courses For Foreign Students &
                                    Teachers</a></h3>
                            <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.
                            </p>
                            <div class="blog-author-wrap">
                                <div class="blog-author">
                                    <div class="blog-author-img">
                                        <img src="{{ asset('assets/img/blog/author-3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="blog-author-name">
                                        <p>By <a href="blog-details-left-sidebar.html">Tony Stark</a></p>
                                    </div>
                                </div>
                                <a href="blog-details-right-sidebar.html" class="read-more"><i
                                        class="las la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
