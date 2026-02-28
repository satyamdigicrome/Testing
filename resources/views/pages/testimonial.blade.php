@extends('layout.app')
@section('content')

    {{-- ===== Breadcrumb ===== --}}
    <section class="breadcrumb-wrap br-bg-1">
        <div class="overlay op-7 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Testimonials</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Testimonials</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Breadcrumb end ===== --}}

    {{-- ===== Testimonial Section ===== --}}
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

            @if($testimonials->isNotEmpty())
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonial-slider-one swiper-container">
                            <div class="swiper-wrapper">

                                @foreach($testimonials as $testimonial)
                                    <div class="swiper-slide">
                                        <div class="testimonial-item">

                                            {{-- Client Photo --}}
                                            <div class="client-img">
                                                @if($testimonial->image)
                                                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                                                         alt="{{ $testimonial->name }}">
                                                @else
                                                    <img src="{{ asset('assets/img/testimonial/client-1.jpg') }}"
                                                         alt="{{ $testimonial->name }}">
                                                @endif
                                            </div>

                                            {{-- Name + Stars --}}
                                            <div class="client-name">
                                                <h5>{{ $testimonial->name }}</h5>
                                                <ul class="rating">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <li>
                                                            @if($i <= $testimonial->rating)
                                                                <i class="ri-star-fill"></i>
                                                            @else
                                                                <i class="ri-star-line"></i>
                                                            @endif
                                                        </li>
                                                    @endfor
                                                </ul>
                                            </div>

                                            {{-- Quote Text --}}
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
                            {{-- Swiper Pagination --}}
                            <div class="testimonial-pagination"></div>
                        </div>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-white">No testimonials available at the moment.</p>
                    </div>
                </div>
            @endif

        </div>
    </section>
    {{-- ===== Testimonial Section end ===== --}}

@endsection
