<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('styles')
</head>

<body>
    <div class="preloader js-preloader">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="Image">
    </div>

    <div class="page-wrapper">
        @include('layout.header')
        @include('partials.contact-sidebar')
        @yield('content')

        @include('layout.footer')
    </div>
    @include('layout.foot')
    @stack('scripts')
</body>

</html>
