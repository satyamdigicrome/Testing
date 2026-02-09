@extends('layout.app')
@section('content')
    <section class="breadcrumb-wrap  br-bg-1">
        <div class="overlay op-7 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Testimonials</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
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
@endsection
