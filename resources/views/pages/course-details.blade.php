@extends('layout.app')
@section('content')

    {{-- ===== Breadcrumb ===== --}}
    <section class="breadcrumb-wrap bg-f br-bg-2">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Course Details</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('courses') }}">Courses</a></li>
                            <li>{{ Str::limit($course->title, 50) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Breadcrumb end ===== --}}

    {{-- ===== Course Details Section ===== --}}
    <section class="course-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">

                {{-- Left Column: Main Content --}}
                <div class="col-lg-8">
                    <div class="course-details">

                        {{-- Banner Image --}}
                        @if($course->image || $course->thumbnail)
                            <div class="course-details-img">
                                <img src="{{ asset('storage/' . ($course->image ?? $course->thumbnail)) }}"
                                     alt="{{ $course->title }}">
                            </div>
                        @endif

                        {{-- Meta Row --}}
                        <ul class="course-details-meta">
                            @if($course->duration)
                                <li><i class="las la-clock"></i>{{ $course->duration }}</li>
                            @endif
                            @if($course->lectures)
                                <li><i class="las la-graduation-cap"></i>{{ $course->lectures }} Lectures</li>
                            @endif
                            @if($course->start_date)
                                <li><i class="lar la-calendar"></i>{{ $course->start_date->format('d M, Y') }}</li>
                            @endif
                        </ul>

                        {{-- Tabs --}}
                        <ul class="nav nav-tabs course-tablist" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#tab_description" type="button" role="tab">
                                    Description
                                </button>
                            </li>
                            @if($course->instructor_name)
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#tab_instructor" type="button" role="tab">
                                        Instructor
                                    </button>
                                </li>
                            @endif
                            @if($course->reviews->isNotEmpty())
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                            data-bs-target="#tab_reviews" type="button" role="tab">
                                        Reviews
                                        <span class="badge bg-secondary ms-1">{{ $course->reviews->count() }}</span>
                                    </button>
                                </li>
                            @endif
                        </ul>

                        <div class="tab-content course-tab-content">

                            {{-- Description Tab --}}
                            <div class="tab-pane fade show active" id="tab_description" role="tabpanel">
                                <h5 class="mt-0">{{ $course->title }}</h5>
                                @if($course->long_description)
                                    <div class="course-long-desc">
                                        {!! $course->long_description !!}
                                    </div>
                                @elseif($course->short_description)
                                    <p>{{ $course->short_description }}</p>
                                @else
                                    <p>No description available for this course.</p>
                                @endif
                            </div>

                            {{-- Instructor Tab --}}
                            @if($course->instructor_name)
                                <div class="tab-pane fade" id="tab_instructor" role="tabpanel">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6 col-md-6 col-sm-8">
                                            <div class="team-member">
                                                <div class="team-member-img">
                                                    @if($course->instructor_image)
                                                        <img src="{{ asset('storage/' . $course->instructor_image) }}"
                                                             alt="{{ $course->instructor_name }}">
                                                    @else
                                                        <img src="{{ asset('assets/img/team/team-member-1.jpg') }}"
                                                             alt="{{ $course->instructor_name }}">
                                                    @endif
                                                    <ul class="social-profile style1">
                                                        <li><a target="_blank" href="https://facebook.com"><i class="ri-facebook-fill"></i></a></li>
                                                        <li><a target="_blank" href="https://linkedin.com"><i class="ri-linkedin-fill"></i></a></li>
                                                        <li><a target="_blank" href="https://twitter.com"><i class="ri-twitter-fill"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="team-member-info">
                                                    <h4>{{ $course->instructor_name }}</h4>
                                                    @if($course->instructor_position)
                                                        <p>{{ $course->instructor_position }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- Reviews Tab --}}
                            @if($course->reviews->isNotEmpty())
                                <div class="tab-pane fade" id="tab_reviews" role="tabpanel">
                                    <div class="post-comment-wrap mb-0 review-box">
                                        @foreach($course->reviews as $review)
                                            <div class="comment-item">
                                                <div class="comment-author_img">
                                                    @if($review->image)
                                                        <img src="{{ asset('storage/' . $review->image) }}"
                                                             alt="{{ $review->name }}">
                                                    @else
                                                        <img src="{{ asset('assets/img/blog/avatar-1.jpg') }}"
                                                             alt="{{ $review->name ?? 'Reviewer' }}">
                                                    @endif
                                                </div>
                                                <div class="comment-author_text">
                                                    <div class="comment-author_info">
                                                        <h6>{{ $review->name ?? 'Anonymous' }}</h6>
                                                        @if($review->rating)
                                                            <div class="course-rating">
                                                                <ul>
                                                                    @for($i = 1; $i <= 5; $i++)
                                                                        <li>
                                                                            @if($i <= $review->rating)
                                                                                <i class="ri-star-fill"></i>
                                                                            @else
                                                                                <i class="ri-star-line"></i>
                                                                            @endif
                                                                        </li>
                                                                    @endfor
                                                                </ul>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @if($review->text)
                                                        <p>{{ $review->text }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                        </div>{{-- end tab-content --}}
                    </div>
                </div>

                {{-- Right Column: Sidebar --}}
                <div class="col-lg-4">

                    {{-- Course Info Widget --}}
                    <div class="course-details-widget sidebar-box">
                        <ul>
                            @if($course->lectures)
                                <li>
                                    <p><i class="las la-file-alt"></i>Lectures</p>
                                    <p>{{ $course->lectures }}</p>
                                </li>
                            @endif
                            @if($course->duration)
                                <li>
                                    <p><i class="las la-clock"></i>Duration</p>
                                    <p>{{ $course->duration }}</p>
                                </li>
                            @endif
                            @if($course->start_date)
                                <li>
                                    <p><i class="lar la-calendar"></i>Start Date</p>
                                    <p>{{ $course->start_date->format('d M, Y') }}</p>
                                </li>
                            @endif
                            @if($course->rating)
                                <li>
                                    <p><i class="ri-star-fill"></i>Rating</p>
                                    <p>
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $course->rating)
                                                <i class="ri-star-fill" style="color:#f5a623;font-size:13px;"></i>
                                            @else
                                                <i class="ri-star-line" style="color:#f5a623;font-size:13px;"></i>
                                            @endif
                                        @endfor
                                    </p>
                                </li>
                            @endif
                            @if($course->instructor_name)
                                <li>
                                    <p><i class="las la-user-tie"></i>Instructor</p>
                                    <p>{{ $course->instructor_name }}</p>
                                </li>
                            @endif
                        </ul>
                    </div>

                    {{-- Enroll / Fees Widget --}}
                    <div class="course-enroll-widget sidebar-box">
                        @if($course->fees)
                            <div class="single-course-price">
                                ₹{{ number_format($course->fees) }}
                            </div>
                        @else
                            <div class="single-course-price">Free</div>
                        @endif
                        <a href="{{ route('contact') }}" class="btn v3 d-block text-center">Enroll Now</a>
                    </div>

                </div>

            </div>
        </div>
    </section>
    {{-- ===== Course Details Section end ===== --}}

    {{-- ===== Related Courses ===== --}}
    @if($relatedCourses->isNotEmpty())
        <section class="related-course pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title style1 text-center mb-40">
                            <span>Our Popular Courses</span>
                            <h2>Related Courses</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    @foreach($relatedCourses as $related)
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="course-card style2">
                                <div class="course-img">
                                    <a href="{{ route('course.show', $related->slug) }}">
                                        @if($related->thumbnail)
                                            <img src="{{ asset('storage/' . $related->thumbnail) }}"
                                                 alt="{{ $related->title }}">
                                        @else
                                            <img src="{{ asset('assets/img/course/course-9.jpg') }}"
                                                 alt="{{ $related->title }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="course-info">
                                    @if($related->fees)
                                        <span class="course-price">₹{{ number_format($related->fees) }}</span>
                                    @endif
                                    <h3>
                                        <a href="{{ route('course.show', $related->slug) }}">{{ $related->title }}</a>
                                    </h3>
                                    @if($related->rating)
                                        <div class="course-rating">
                                            <ul>
                                                @for($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        @if($i <= $related->rating)
                                                            <i class="ri-star-fill"></i>
                                                        @else
                                                            <i class="ri-star-line"></i>
                                                        @endif
                                                    </li>
                                                @endfor
                                            </ul>
                                            <span>{{ $related->rating }}/5</span>
                                        </div>
                                    @endif
                                    @if($related->short_description)
                                        <p>{{ Str::limit($related->short_description, 80) }}</p>
                                    @endif
                                </div>
                                <div class="course-metainfo">
                                    @if($related->lectures)
                                        <p><i class="ri-book-open-line"></i>
                                            <a href="{{ route('course.show', $related->slug) }}">
                                                {{ $related->lectures }} Lectures
                                            </a>
                                        </p>
                                    @endif
                                    @if($related->duration)
                                        <p><i class="las la-clock"></i>{{ $related->duration }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    {{-- ===== Related Courses end ===== --}}

@endsection
