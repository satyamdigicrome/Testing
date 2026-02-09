@extends('layout.app')
@section('content')
    <!-- Breadcrumb  start -->
    <section class="breadcrumb-wrap bg-f br-bg-3">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Frequently Asked Questions</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>FAQ (Help)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Tour Details Section start -->
    <section class="faq-wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ecour-faq">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What Are The Different Types of Undergraduate Degrees?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                                                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How To Get Start a Online Course On Ecour?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nemo quidem atque,
                                            nobis aut eveniet ratione, adipisci nisi itaque similique explicabo, soluta vel
                                            rem facilis sunt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I Upgrade After I Finsh The Course?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat possimus deleniti
                                            adipisci officia ipsa dolor atque mollitia non accusamus explicabo suscipit
                                            error, placeat quia minima. Ut fugit adipisci ullam, omnis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        What Are The Different Types of Graduate Degrees?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat possimus deleniti
                                            adipisci officia ipsa dolor atque mollitia non accusamus explicabo suscipit
                                            error, placeat quia minima. Ut fugit adipisci ullam, omnis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        Can I Extand My Courses If I Need More Time?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat possimus deleniti
                                            adipisci officia ipsa dolor atque mollitia non accusamus explicabo suscipit
                                            error, placeat quia minima. Ut fugit adipisci ullam, omnis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        What Time will My Courses Started?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat possimus deleniti
                                            adipisci officia ipsa dolor atque mollitia non accusamus explicabo suscipit
                                            error, placeat quia minima. Ut fugit adipisci ullam, omnis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Details Section end -->
@endsection
