<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.head')
    @stack('styles')
</head>

<body>
    <div class="horizontalMenucontainer">
        {{-- <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_secondary"></i></div>
                <div class="form_holder right-sidebar ps ps--active-y">
                    <div class="row">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <div class="swichermainleft mt-2 text-center">
                                    <div class="p-3"> <a href="../../index.html" target="_blank"
                                            class="btn btn-danger btn-block mt-0">View Demo</a> <a
                                            class="btn btn-info btn-block" target="_blank"
                                            href="https://1.envato.market/N9EQ4P">Buy Now</a> <a
                                            href="https://1.envato.market/MGEaN" target="_blank"
                                            class="btn btn-warning btn-block">Our Portfolio</a> </div>
                                </div>
                                <div class="swichermainleft border-top  mt-2 text-center">
                                    <h4>LTR and RTL VERSIONS</h4>
                                    <div class="skin-body">
                                        <div class="switch_section">
                                            <div class="switch-toggle d-flex"> <span class="me-auto">LTR Version</span>
                                                <a class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                        id="myonoffswitch1" class="onoffswitch2-checkbox"
                                                        checked="">
                                                    <label for="myonoffswitch1" class="onoffswitch2-label"></label> </a>
                                            </div>
                                            <div class="switch-toggle d-flex mt-2"> <span class="me-auto">RTL
                                                    Version</span> <a class="onoffswitch2"><input type="radio"
                                                        name="onoffswitch7" id="myonoffswitch2"
                                                        class="onoffswitch2-checkbox"> <label for="myonoffswitch2"
                                                        class="onoffswitch2-label"></label> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft border-top  mt-2 text-center">
                                    <h4>Theme Style</h4>
                                    <div class="skin-body">
                                        <div class="switch_section">
                                            <div class="switch-toggle d-flex"> <span class="me-auto">Light Theme</span>
                                                <a class="onoffswitch2"><input type="radio" name="onoffswitch1"
                                                        id="myonoffswitch3" class="onoffswitch2-checkbox"
                                                        checked="">
                                                    <label for="myonoffswitch3" class="onoffswitch2-label"></label> </a>
                                            </div>
                                            <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Dark
                                                    Theme</span> <a class="onoffswitch2"><input type="radio"
                                                        name="onoffswitch1" id="myonoffswitch4"
                                                        class="onoffswitch2-checkbox"> <label for="myonoffswitch4"
                                                        class="onoffswitch2-label"></label> </a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft border-top  mt-2 text-center">
                                    <h4>Theme Primary Color</h4>
                                    <div class="skin-body">
                                        <div class="switch_section">
                                            <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Primary
                                                    Color</span>
                                                <div class=""> <input
                                                        class="w-30p h-30 input-color-picker color-primary-light"
                                                        value="#6963ff" id="colorID" oninput="changePrimaryColor()"
                                                        type="color" data-id="bg-color" data-id1="bg-hover"
                                                        data-id2="bg-border" data-id7="bg-transparentcolor"
                                                        name="lightPrimary"> </div>
                                            </div>
                                            <div class="switch-toggle d-flex mt-2"> <span class="me-auto">Background
                                                    Color</span>
                                                <div class=""> <input
                                                        class="w-30p h-30 input-bg-picker background-primary-light"
                                                        value="#212332" id="bgID" oninput="changeBackgroundColor()"
                                                        type="color" data-id3="body" data-id4="theme"
                                                        name="BackgroundPrimary"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swichermainleft border-top  mt-2 text-center">
                                    <h4>Reset All Styles</h4>
                                    <div class="skin-body">
                                        <div class="switch_section my-4"> <button class="btn btn-danger btn-block"
                                                onclick="localStorage.clear();
												document.querySelector('html').style = '';
												resetData();"
                                                type="button">Reset All </button> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 648px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 633px;"></div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="global-loader" style="display: none;"> <img src="{{ asset('assets/images/loader.svg') }}"
                class="loader-img" alt="img">
        </div>
        @include('layout.header')

        @yield('content')

        @include('layout.footer')
    </div>
    @include('layout.foot')
    @stack('scripts')
</body>

</html>
