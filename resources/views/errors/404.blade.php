@extends('layout.app')
@section('content')
    <!-- Breadcrumb  start -->
    <section class="breadcrumb-wrap bg-f br-bg-5">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>404 Error</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>404</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Error Section start -->
    <div class="error-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="error-content">
                        <span class="trans_text v4">Oops!</span>
                        <h2>404 error</h2>
                        <p>The Page you are looking for is not available</p>
                        <a href="{{ route('home') }}" class="btn v1"><i class="las la-arrow-left"></i>Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Error Section end -->
@endsection
