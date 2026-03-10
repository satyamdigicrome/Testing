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
                                                <a href="{{ route('courses') }}" class="btn v1">View Courses</a>
                                                <a href="#" class="btn v2 js-lead-trigger"> Join For Free</a>
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
                                                <a href="{{ route('courses') }}" class="btn v1">View Courses</a>
                                                <a href="#" class="btn v2 js-lead-trigger"> Join For Free</a>
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
                                                <a href="{{ route('courses') }}" class="btn v1">View Courses</a>
                                                <a href="#" class="btn v2 js-lead-trigger"> Join For Free</a>
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
                    <a href="{{ route('courses') }}" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
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
                            <a href="{{ route('courses') }}" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Promo banner section end -->

        {{-- ===== Top Categories (dynamic) ===== --}}
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
                @if($topCourses->isNotEmpty())
                    <div class="row justify-content-md-center">
                        @foreach($topCourses as $course)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="course-card style1">
                                    <div class="course-img">
                                        <a href="{{ route('course.show', $course->slug) }}">
                                            @if($course->thumbnail)
                                                <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="{{ $course->title }}">
                                            @else
                                                <img src="{{ asset('assets/img/course/course-1.jpg') }}" alt="{{ $course->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="course-info">
                                        <h3>
                                            <a href="{{ route('course.show', $course->slug) }}">{{ $course->title }}</a>
                                        </h3>
                                        @if($course->rating)
                                            <div class="course-rating">
                                                <ul>
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <li><i class="{{ $i <= $course->rating ? 'ri-star-fill' : 'ri-star-line' }}"></i></li>
                                                    @endfor
                                                </ul>
                                                <span>{{ $course->rating }}/5</span>
                                            </div>
                                        @endif
                                        @if($course->short_description)
                                            <p>{{ Str::limit($course->short_description, 80) }}</p>
                                        @endif
                                    </div>
                                    <div class="course-metainfo">
                                        <div class="course-metainfo-left">
                                            <ul>
                                                @if($course->lectures)
                                                    <li><p><i class="ri-discuss-line"></i>
                                                        <a href="{{ route('course.show', $course->slug) }}">{{ $course->lectures }} Lectures</a>
                                                    </p></li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="course-metainfo-right">
                                            @if($course->fees)
                                                <div class="price-tag">
                                                    <p><span>₹{{ number_format($course->fees) }}</span></p>
                                                </div>
                                            @else
                                                <div class="price-tag"><p><span>Free</span></p></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row"><div class="col-12 text-center py-5">
                        <p class="text-muted">Courses coming soon.</p>
                        <a href="{{ route('courses') }}" class="btn v1 mt-2">Browse Courses</a>
                    </div></div>
                @endif

                @if($topCourses->isNotEmpty())
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a href="{{ route('courses') }}" class="btn v1">View All Courses</a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- ===== Top Categories end ===== --}}

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

        {{-- ===== Popular Online Courses (dynamic) ===== --}}
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
                @if($popularCourses->isNotEmpty())
                    <div class="row justify-content-md-center">
                        @foreach($popularCourses as $course)
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="course-card style2">
                                    <div class="course-img">
                                        <a href="{{ route('course.show', $course->slug) }}">
                                            @if($course->thumbnail)
                                                <img src="{{ asset('storage/' . $course->thumbnail) }}" alt="{{ $course->title }}">
                                            @else
                                                <img src="{{ asset('assets/img/course/course-9.jpg') }}" alt="{{ $course->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="course-info">
                                        @if($course->fees)
                                            <span class="course-price">₹{{ number_format($course->fees) }}</span>
                                        @endif
                                        <h3>
                                            <a href="{{ route('course.show', $course->slug) }}">{{ $course->title }}</a>
                                        </h3>
                                        @if($course->rating)
                                            <div class="course-rating">
                                                <ul>
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <li><i class="{{ $i <= $course->rating ? 'ri-star-fill' : 'ri-star-line' }}"></i></li>
                                                    @endfor
                                                </ul>
                                                <span>{{ $course->rating }}/5 Rating</span>
                                            </div>
                                        @endif
                                        @if($course->short_description)
                                            <p>{{ Str::limit($course->short_description, 80) }}</p>
                                        @endif
                                    </div>
                                    <div class="course-metainfo">
                                        @if($course->lectures)
                                            <p><i class="ri-book-open-line"></i>
                                                <a href="{{ route('course.show', $course->slug) }}">{{ $course->lectures }} Lectures</a>
                                            </p>
                                        @endif
                                        @if($course->duration)
                                            <p><i class="las la-clock"></i>{{ $course->duration }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row"><div class="col-12 text-center py-4">
                        <p class="text-muted">No courses available yet.</p>
                    </div></div>
                @endif
            </div>
        </section>
        {{-- ===== Popular Online Courses end ===== --}}

        <!-- Discount Section start -->
        <section class="discount-wrap">
            <div class="discount-item-wrap bg-f promo-bg-6">
                <div class="discount-item-left bg-f promo-bg-3">
                    <div class="overlay bg-midnight op-9"></div>
                    <div class="content-wrap style1">
                        <h2>Up-to 15% Discount Offer For Joining Today</h2>
                        <p>The user can create dummy content in word paragraph list items and proposals. Depending on your requirement, a user can fit any of these formats in their project, which adds a lot of conveniences.</p>
                        <a href="#" class="btn v1 js-lead-trigger"> <i class="ri-logout-circle-r-line"></i> Register Now</a>
                    </div>
                </div>
                <div class="promo-circle-shape md-none">
                    <img src="{{ asset('assets/img/promo/promo-circle-shape.svg')}}" alt="Image">
                </div>
            </div>
        </section>
        <!-- Discount Section end -->

        {{-- ===== Team Section (dynamic) ===== --}}
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
                @if($teamMembers->isNotEmpty())
                    <div class="row justify-content-md-center">
                        @foreach($teamMembers as $member)
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="team-member">
                                    <div class="team-member-img">
                                        @if($member->image)
                                            <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                        @else
                                            <img src="{{ asset('assets/img/team/team-member-1.jpg') }}" alt="{{ $member->name }}">
                                        @endif
                                        <ul class="social-profile style1">
                                            @if($member->facebook_url)
                                                <li><a target="_blank" href="{{ $member->facebook_url }}"><i class="ri-facebook-fill"></i></a></li>
                                            @else
                                                <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i></a></li>
                                            @endif
                                            @if($member->linkedin_url)
                                                <li><a target="_blank" href="{{ $member->linkedin_url }}"><i class="ri-linkedin-fill"></i></a></li>
                                            @else
                                                <li><a target="_blank" href="https://linkedin.com"><i class="ri-linkedin-fill"></i></a></li>
                                            @endif
                                            @if($member->twitter_url)
                                                <li><a target="_blank" href="{{ $member->twitter_url }}"><i class="ri-twitter-fill"></i></a></li>
                                            @else
                                                <li><a target="_blank" href="https://twitter.com"><i class="ri-twitter-fill"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="team-member-info">
                                        <h4>{{ $member->name }}</h4>
                                        @if($member->position)
                                            <p>{{ $member->position }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-12 text-center py-4">
                            <p class="text-muted">Team members will be listed here soon.</p>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- ===== Team Section end ===== --}}

        {{-- ===== Testimonial section (dynamic) ===== --}}
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
                        @if($testimonials->isNotEmpty())
                            <div class="testimonial-slider-one swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach($testimonials as $testimonial)
                                        <div class="swiper-slide">
                                            <div class="testimonial-item">
                                                <div class="client-img">
                                                    @if($testimonial->image)
                                                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/img/testimonial/client-1.jpg') }}" alt="{{ $testimonial->name }}">
                                                    @endif
                                                </div>
                                                <div class="client-name">
                                                    <h5>{{ $testimonial->name }}</h5>
                                                    @if($testimonial->rating)
                                                        <ul class="rating">
                                                            @for($i = 1; $i <= 5; $i++)
                                                                <li><i class="{{ $i <= $testimonial->rating ? 'ri-star-fill' : 'ri-star-line' }}"></i></li>
                                                            @endfor
                                                        </ul>
                                                    @endif
                                                </div>
                                                @if($testimonial->text)
                                                    <div class="client-quote">
                                                        <p>{{ $testimonial->text }}</p>
                                                    </div>
                                                @endif
                                                <div class="quote-icon">
                                                    <i class="ri-double-quotes-r"></i>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="testimonial-pagination"></div>
                            </div>
                        @else
                            <p class="text-center text-white opacity-75">No testimonials yet.</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        {{-- ===== Testimonial section end ===== --}}

        {{-- ===== Blog Section (dynamic – recent 3) ===== --}}
        <section class="blog-wrap pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Our Blogs</span>
                            <h2>Latest News &amp; Blogs</h2>
                        </div>
                    </div>
                </div>
                @if($recentBlogs->isNotEmpty())
                    <div class="row justify-content-md-center">
                        @foreach($recentBlogs as $blog)
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="blog-card">
                                    <a href="{{ route('blog.show', $blog->slug) }}" class="blog-img">
                                        @if($blog->thumbnail)
                                            <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->name }}">
                                        @else
                                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="{{ $blog->name }}">
                                        @endif
                                    </a>
                                    <div class="blog-info">
                                        <div class="blog-date">
                                            <h6>
                                                <span>{{ $blog->created_at->format('d') }}</span>
                                                {{ $blog->created_at->format('M') }}
                                            </h6>
                                        </div>
                                        <h3>
                                            <a href="{{ route('blog.show', $blog->slug) }}">
                                                {{ Str::limit($blog->name, 65) }}
                                            </a>
                                        </h3>
                                        @if($blog->short_description)
                                            <p>{{ Str::limit($blog->short_description, 100) }}</p>
                                        @endif
                                        <div class="blog-author-wrap">
                                            <div class="blog-author">
                                                @if($blog->author_image)
                                                    <div class="blog-author-img">
                                                        <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}">
                                                    </div>
                                                @else
                                                    <div class="blog-author-img">
                                                        <img src="{{ asset('assets/img/blog/author-1.jpg') }}" alt="{{ $blog->author_name }}">
                                                    </div>
                                                @endif
                                                <div class="blog-author-name">
                                                    <p>By <a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->author_name ?? 'Admin' }}</a></p>
                                                </div>
                                            </div>
                                            <a href="{{ route('blog.show', $blog->slug) }}" class="read-more">
                                                <i class="las la-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a href="{{ route('blogs') }}" class="btn v1">View All Blogs</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12 text-center py-4">
                            <p class="text-muted">No blog posts yet.</p>
                            <a href="{{ route('blogs') }}" class="btn v1 mt-2">Go to Blog</a>
                        </div>
                    </div>
                @endif
            </div>
        </section>
        {{-- ===== Blog Section end ===== --}}
@endsection
