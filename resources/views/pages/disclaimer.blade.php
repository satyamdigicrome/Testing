@extends('layout.app')
@section('content')

    {{-- ===== Breadcrumb ===== --}}
    <section class="breadcrumb-wrap bg-f br-bg-5">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Disclaimer</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Disclaimer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Breadcrumb end ===== --}}

    {{-- ===== Content Section ===== --}}
    <section class="faq-wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pp-content-wrap">

                        @if($document && $document->content)
                            <div class="pp-content">
                                {!! $document->content !!}
                            </div>
                        @else
                            <div class="pp-content text-center py-5">
                                <p class="text-muted">Disclaimer content is being prepared. Please check back soon.</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ===== Content Section end ===== --}}

@endsection
