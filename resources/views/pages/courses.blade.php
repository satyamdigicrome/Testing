@extends('layout.app')
@section('content')

    {{-- ===== Breadcrumb ===== --}}
    <section class="breadcrumb-wrap bg-f br-bg-4">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Our Courses</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Breadcrumb end ===== --}}

    {{-- ===== Course Listing Section ===== --}}
    <section class="project-wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title style1 text-center mb-40">
                        <span>Top Courses</span>
                        <h2>Our Top Online Courses</h2>
                    </div>
                </div>
            </div>

            {{-- Search bar --}}
            <div class="row justify-content-center mb-40">
                <div class="col-lg-6 col-md-8">
                    <form action="{{ route('courses') }}" method="GET" class="d-flex">
                        <div class="form-group mb-0 flex-grow-1 me-2">
                            <input type="search" name="search" class="form-control"
                                   placeholder="Search courses..."
                                   value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn v1">
                            <i class="ri-search-line"></i>
                        </button>
                    </form>
                </div>
            </div>

            @if($courses->isNotEmpty())
                <div class="row justify-content-md-center">
                    @foreach($courses as $course)
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
                                    {{-- Star Rating --}}
                                    @if($course->rating)
                                        <div class="course-rating">
                                            <ul>
                                                @for($i = 1; $i <= 5; $i++)
                                                    <li>
                                                        @if($i <= $course->rating)
                                                            <i class="ri-star-fill"></i>
                                                        @else
                                                            <i class="ri-star-line"></i>
                                                        @endif
                                                    </li>
                                                @endfor
                                            </ul>
                                            <span>{{ $course->rating }}/5</span>
                                        </div>
                                    @endif
                                    @if($course->short_description)
                                        <p>{{ Str::limit($course->short_description, 90) }}</p>
                                    @endif
                                </div>
                                <div class="course-metainfo">
                                    <div class="course-metainfo-left">
                                        <ul>
                                            @if($course->lectures)
                                                <li>
                                                    <p><i class="ri-discuss-line"></i>
                                                        <a href="{{ route('course.show', $course->slug) }}">
                                                            {{ $course->lectures }} Lectures
                                                        </a>
                                                    </p>
                                                </li>
                                            @endif
                                            @if($course->duration)
                                                <li>
                                                    <p><i class="las la-clock"></i> {{ $course->duration }}</p>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                    <div class="course-metainfo-right">
                                        @if($course->fees)
                                            <div class="price-tag">
                                                <p><span>₹{{ number_format($course->fees) }}</span></p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                @if($courses->hasPages())
                    <div class="row mt-40">
                        <div class="col-lg-12">
                            <div class="page-navigation">
                                <ul class="page-nav justify-content-center">
                                    @if($courses->onFirstPage())
                                        <li><span><i class="ri-arrow-left-s-line"></i></span></li>
                                    @else
                                        <li><a href="{{ $courses->previousPageUrl() }}"><i class="ri-arrow-left-s-line"></i></a></li>
                                    @endif

                                    @foreach($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
                                        <li>
                                            <a class="{{ $page == $courses->currentPage() ? 'active' : '' }}" href="{{ $url }}">
                                                {{ $page }}
                                            </a>
                                        </li>
                                    @endforeach

                                    @if($courses->hasMorePages())
                                        <li><a href="{{ $courses->nextPageUrl() }}"><i class="ri-arrow-right-s-line"></i></a></li>
                                    @else
                                        <li><span><i class="ri-arrow-right-s-line"></i></span></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

            @else
                <div class="row">
                    <div class="col-12 text-center py-5">
                        <p>No courses found{{ request('search') ? ' for "' . e(request('search')) . '"' : '' }}.</p>
                        @if(request('search'))
                            <a href="{{ route('courses') }}" class="btn v1 mt-3">View All Courses</a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>
    {{-- ===== Course Listing Section end ===== --}}

@endsection
