@extends('layout.app')
@section('content')
@include('partials.contact-sidebar')
<!-- Hero section start -->
        <div class="hero-wrap style2">
            <div class="hero-slider-two swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hero-slider-item bg-f hero-bg-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 offset-lg-5">
                                        <div class="hero-content">
                                            <div class="hero-shape-2 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-2.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-3 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-3.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-4 md-none">
                                                <img src="{{ asset('assets/img/hero/circle-shape-2.png')}}" alt="Image">
                                            </div>
                                            <h1>Explore Your Creativity
                                                With Best Online Courses</h1>
                                            <p>It was popularised in Letraset sheets containing Lorem Ipsum and more recently with desktop publishing software.</p>
                                            <div class="hero-btn">
                                                <a href="course.html" class="btn v1">View Courses</a>
                                                <a href="login.html" class="btn v2"> Join For Free</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slider-item bg-f hero-bg-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 offset-lg-5">
                                        <div class="hero-content">
                                            <div class="hero-shape-2 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-2.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-3 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-3.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-4 md-none">
                                                <img src="{{ asset('assets/img/hero/circle-shape-2.png')}}" alt="Image">
                                            </div>
                                            <h1>Best Online Education Platform For You</h1>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur optio facilis dolores eaque reiciendis voluptate rerum eius eos doloremque quis!.</p>
                                            <div class="hero-btn">
                                                <a href="course.html" class="btn v1">View Courses</a>
                                                <a href="login.html" class="btn v2"> Join For Free</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hero-slider-item bg-f hero-bg-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-7 offset-lg-5">
                                        <div class="hero-content">
                                            <div class="hero-shape-2 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-2.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-3 md-none">
                                                <img src="{{ asset('assets/img/hero/dot-shape-3.png')}}" alt="Image">
                                            </div>
                                            <div class="hero-shape-4 md-none">
                                                <img src="{{ asset('assets/img/hero/circle-shape-2.png')}}" alt="Image">
                                            </div>
                                            <h1>Take Your Admission To The Best Online Learning Course</h1>
                                            <p>It was popularised in Letraset sheets containing Lorem Ipsum and more recently with desktop publishing software.</p>
                                            <div class="hero-btn">
                                                <a href="course.html" class="btn v1">View Courses</a>
                                                <a href="login.html" class="btn v2"> Join For Free</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-pagination"></div>
            </div>
        </div>
        <!-- Hero section end -->
        <!-- About Section Start -->
        <section class="about-wrap style2 ptb-100">
            <div class="about-img">
                <img src="{{ asset('assets/img/about/about-img-2.png')}}" alt="Image">
            </div>
            <div class="about-content">
                <div class="section-title text-left style1">
                    <span>About us</span>
                    <h2>Welcome To Ecour Learning</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed does the eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="about-subpara">
                        <h5><span> <img src="{{ asset('assets/img/about/goal.svg')}}" alt="Image"></span>Ecour Is The Right Place Where You Can Achieved</h5>
                        <p>Lorem ipsum dolor sit amet consecteur adipsicing elit ed does the eiusmod tempor incidiun abore et dolore magna aliqua. It Integer mauris eu nibh euismod gravida. Duis ac. </p>
                    </div>
                    <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                </div>
            </div>
        </section>
        <!-- About Section end -->
        <!-- Promo banner section start -->
        <div class="promo-banner-wrap style4 promo-bg-1 bg-f ptb-100">
            <div class="overlay bg-midnight op-8"></div>
            <div class="promo-circle-shape md-none">
                <img src="{{ asset('assets/img/promo/promo-circle-shape.svg')}}" alt="Image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="promo-content  text-center">
                            <h2 class="text-white">Trusted By 10,000 + Organization</h2>
                            <p class="text-white">Curabitur pretium tincidunt lacus. Nulla gravida a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in odio mauris eu nibh euismod gravida.</p>
                            <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promo banner section end -->
        <!-- Course Section start -->
        <section class="course-wrap pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Top Categories</span>
                            <h2>Our Top Online Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-1.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Foundation Of Positive :
                                        Psychology</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>4 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>13</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">17</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span class="discount">$29.50</span><span>$25.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-2.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Python For Data Search
                                        And Machine Learning</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>7 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>12</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">11</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span class="discount">$40.50</span><span>$20.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-3.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Microsoft Excel - Excel For
                                        Beginner</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                    </ul>
                                    <span>5 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>22</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">19</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span>$30.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-4.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">The Complete Foundation
                                        Stock Trading Courses</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                    </ul>
                                    <span>3 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>5</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">9</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span>$20.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-5.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Information About Ui/Ux
                                        Design</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i> </li>
                                    </ul>
                                    <span>9 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>15</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">22</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span>$35.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-6.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Course for Educational
                                        Photography</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>2 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>7</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">11</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span class="discount">$30.50</span><span>$20.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-7.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Introduction To Teaching
                                        English</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>8 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>17</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">19</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span class="discount">$90.50</span><span>$70.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style1">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-8.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <h3><a href="course-details.html">Diploma in Educational
                                        Psychology</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>5 Reviews</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ipsum dolor iste! </p>
                            </div>
                            <div class="course-metainfo">
                                <div class="course-metainfo-left">
                                    <ul>
                                        <li>
                                            <p><i class="ri-user-line"></i>12</p>
                                        </li>
                                        <li>
                                            <p><i class="ri-discuss-line"></i><a href="course-details.html">5</a></p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="course-metainfo-right">
                                    <div class="price-tag">
                                        <p><span>$70.00</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Section End -->
        <!-- Promo video section start -->
        <div class="promo-video-wrap">
            <div class="container">
                <div class="prom-dot-shape md-none">
                    <img src="{{ asset('assets/img/promo/dot-shape-3.png')}}" alt="Image">
                </div>
                <div class="prom-circle-shape md-none">
                    <img src="{{ asset('assets/img/promo/promo-circle-shape.svg')}}" alt="Image">
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="promo-video-bg bg-f promo-bg-1">
                            <a class="video-play circle style1" data-fslightbox="" href="https://www.youtube.com/watch?v=u31qwQUeGuM">
                                <i class="ri-play-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promo video section end -->
        <!-- Course Section start -->
        <section class="course-wrap pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Popular Courses</span>
                            <h2>Our Popular Online Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-9.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$35.50</span>
                                <h3><a href="course-details.html">Diploma in Teaching skills:
                                        Educators</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>4 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>13 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">4 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-10.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$55.50</span>
                                <h3><a href="course-details.html">Diploma in Teaching skills:
                                        Educators</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>9 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>23 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">10 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-11.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$95.50</span>
                                <h3><a href="course-details.html">Information About UI/UX
                                        Design</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>10 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>22 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">12 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="course-card style2">
                            <div class="course-img">
                                <a href="course-details.html"><img src="{{ asset('assets/img/course/course-1.jpg')}}" alt="Image"></a>
                            </div>
                            <div class="course-info">
                                <span class="course-price">$55.50</span>
                                <h3><a href="course-details.html">Diploma in Educational
                                        psychology</a></h3>
                                <div class="course-rating">
                                    <ul>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-fill"></i></li>
                                        <li> <i class="ri-star-line"></i> </li>
                                    </ul>
                                    <span>6 Ratings</span>
                                </div>
                                <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                            </div>
                            <div class="course-metainfo">
                                <p><i class="ri-user-line"></i>16 students</p>
                                <p><i class="ri-book-open-line"></i><a href="course-details.html">8 Lessons</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Course Section End -->
        <!-- Discount Section start -->
        <section class="discount-wrap">
            <div class="discount-item-wrap bg-f promo-bg-6">
                <div class="discount-item-left bg-f promo-bg-3">
                    <div class="overlay bg-midnight op-9"></div>
                    <div class="content-wrap style1">
                        <h2>Up-to 15% Discount Offer For Joining Today</h2>
                        <p>The user can create dummy content in word paragraph list items and proposals. Depending on your requirement, a user can fit any of these formats in their project, which adds a lot of conveniences.</p>
                        <a href="login.html" class="btn v1"> <i class="ri-logout-circle-r-line"></i> Register Now</a>
                    </div>
                </div>
                <div class="promo-circle-shape md-none">
                    <img src="{{ asset('assets/img/promo/promo-circle-shape.svg')}}" alt="Image">
                </div>
            </div>
        </section>
        <!-- Discount Section end -->
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
                                <img src="{{ asset('assets/img/team/team-member-1.jpg')}}" alt="Image">
                                <ul class="social-profile style1">
                                    <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                    <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
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
                                <img src="{{ asset('assets/img/team/team-member-2.jpg')}}" alt="Image">
                                <ul class="social-profile style1">
                                    <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                    <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
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
                                <img src="{{ asset('assets/img/team/team-member-3.jpg')}}" alt="Image">
                                <ul class="social-profile style1">
                                    <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                    <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
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
                                <img src="{{ asset('assets/img/team/team-member-4.jpg')}}" alt="Image">
                                <ul class="social-profile style1">
                                    <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i> </a></li>
                                    <li><a target="_blank" href="https://linkedin.com"> <i class="ri-linkedin-fill"></i> </a></li>
                                    <li><a target="_blank" href="https://twitter.com"> <i class="ri-twitter-fill"></i> </a></li>
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
                                            <img src="{{ asset('assets/img/testimonial/client-1.jpg')}}" alt="Image">
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
                                            <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/testimonial/client-2.jpg')}}" alt="Image">
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
                                            <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/testimonial/client-3.jpg')}}" alt="Image">
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
                                            <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
                                        </div>
                                        <div class="quote-icon">
                                            <i class="ri-double-quotes-r"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="client-img">
                                            <img src="{{ asset('assets/img/testimonial/client-4.jpg')}}" alt="Image">
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
                                            <p>This is an ideal dummy text generator or a Lorem Ipsum tool. It can create random text blocks for users with many customization options that allow the user to get exactly what they need. It allows you to break down </p>
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
                                <img src="{{ asset('assets/img/blog/blog-1.jpg')}}" alt="Image">
                            </a>
                            <div class="blog-info">
                                <div class="blog-date">
                                    <h6><span>25</span>Feb<script src="{{ asset('assets/js/fslightbox.js')}}"></script></h6>
                                </div>
                                <h3><a href="blog-details-right-sidebar.html">This is yet another impressive Lorem generator offer</a></h3>
                                <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                                <div class="blog-author-wrap">
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="{{ asset('assets/img/blog/author-1.jpg')}}" alt="Image">
                                        </div>
                                        <div class="blog-author-name">
                                            <p>By <a href="blog-details-left-sidebar.html">Mark John</a></p>
                                        </div>
                                    </div>
                                    <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details-right-sidebar.html" class="blog-img">
                                <img src="{{ asset('assets/img/blog/blog-2.jpg')}}" alt="Image">
                            </a>
                            <div class="blog-info">
                                <div class="blog-date">
                                    <h6><span>04</span>Feb <script src="{{ asset('assets/js/fslightbox.js')}}"></script></h6>
                                </div>
                                <h3><a href="blog-details-right-sidebar.html">Role Of A Online Instructor In Competitive Education System</a></h3>
                                <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                                <div class="blog-author-wrap">
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="{{ asset('assets/img/blog/author-2.jpg')}}" alt="Image">
                                        </div>
                                        <div class="blog-author-name">
                                            <p>By <a href="blog-details-left-sidebar.html">Phill Heath</a></p>
                                        </div>
                                    </div>
                                    <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card">
                            <a href="blog-details-right-sidebar.html" class="blog-img">
                                <img src="{{ asset('assets/img/blog/blog-3.jpg')}}" alt="Image">
                            </a>
                            <div class="blog-info">
                                <div class="blog-date">
                                    <h6><span>12</span>Jan <script src="{{ asset('assets/js/fslightbox.js')}}"></script></h6>
                                </div>
                                <h3><a href="blog-details-right-sidebar.html">Top Online Courses For Foreign Students & Teachers</a></h3>
                                <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et dolore.</p>
                                <div class="blog-author-wrap">
                                    <div class="blog-author">
                                        <div class="blog-author-img">
                                            <img src="{{ asset('assets/img/blog/author-3.jpg')}}" alt="Image">
                                        </div>
                                        <div class="blog-author-name">
                                            <p>By <a href="blog-details-left-sidebar.html">Tony Stark</a></p>
                                        </div>
                                    </div>
                                    <a href="blog-details-right-sidebar.html" class="read-more"><i class="las la-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection