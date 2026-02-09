@extends('layout.app')
@section('content')
    <!-- Breadcrumb  start -->
    <section class="breadcrumb-wrap bg-f br-bg-2">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>All Blogs</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>All Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Blog start -->
    <div class="blog-section pt-100 pb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                    <div class="row justify-content-md-center">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>25</span>Feb
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">This is yet another impressive Lorem
                                            generator offer for anyone.</a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-1.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Mark John</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>04</span>Feb
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">The Role Of Instructor Is Optional,But The
                                            Role Of Learner Is Essential </a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-2.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Phill Heath</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>12</span>Jan
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">Top Online Courses For Foreign Students &
                                            Institution's Teachers</a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-3.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Tony Stark</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-4.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>06</span>Jan
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">The Most Effective,Successful
                                            Professionals Are Constantly Learning.</a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-4.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Phill Heath</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-5.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>25</span>Dec 2024</h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">Why We Need To Adopt Technology Into
                                            Curriculum</a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-2.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Mark John</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="blog-card style2">
                                <a href="{{ route('blog-details') }}" class="blog-img">
                                    <img src="{{ asset('assets/img/blog/blog-6.jpg') }}" alt="Image">
                                </a>
                                <div class="blog-info">
                                    <div class="blog-date">
                                        <h6><span>12</span>Dec 2024</h6>
                                    </div>
                                    <h3><a href="{{ route('blog-details') }}">Online Lerning Is Not The Next Big
                                            Thing,It Is The Now Big Thing</a></h3>
                                    <p>Lorem ipsum dolor am consectetur adipisicing elit, sed do eiusmod tempor labore et
                                        dolore.</p>
                                    <div class="blog-author-wrap">
                                        <div class="blog-author">
                                            <div class="blog-author-img">
                                                <img src="{{ asset('assets/img/blog/author-1.jpg') }}" alt="Image">
                                            </div>
                                            <div class="blog-author-name">
                                                <p>By <a href="#">Mark Jhon</a></p>
                                            </div>
                                        </div>
                                        <a href="{{ route('blog-details') }}" class="read-more"><i
                                                class="las la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-navigation">
                        <div class="row">
                            <div class="col-lg-12 ">
                                <ul class="page-nav">
                                    <li><a href="#"> <i class="ri-arrow-left-s-line"></i> </a></li>
                                    <li><a class="active" href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"> <i class="ri-arrow-right-s-line"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                    <div class="sidebar">
                        <div class="sidebar-widget search-box ">
                            <input type="search" placeholder="Search By Keywords">
                            <button type="submit"> <i class="ri-search-line"></i> </button>
                        </div>
                        <div class="sidebar-widget recent-post ">
                            <h4>Popular Posts </h4>
                            <div class="popular-post-widget">
                                <div class="pp-post-item">
                                    <div class="pp-post-img">
                                        <img src="{{ asset('assets/img/blog/post-thumb-1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="pp-post-info">
                                        <span>09 Jan
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </span>
                                        <h6><a href="#"> University Class Will Start Soon While
                                                Lorem Ipsum Adid Ipsum</a></h6>
                                    </div>
                                </div>
                                <div class="pp-post-item">
                                    <div class="pp-post-img">
                                        <img src="{{ asset('assets/img/blog/post-thumb-2.jpg') }}" alt="Image">
                                    </div>
                                    <div class="pp-post-info">
                                        <span>08 Jan
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </span>
                                        <h6><a href="#">Top 10 Tips To Boost Effectiveness Of
                                                Online Classes</a></h6>
                                    </div>
                                </div>
                                <div class="pp-post-item">
                                    <div class="pp-post-img">
                                        <img src="{{ asset('assets/img/blog/post-thumb-3.jpg') }}" alt="Image">
                                    </div>
                                    <div class="pp-post-info">
                                        <span>15 Dec 2024</span>
                                        <h6><a href="#">Major Discrimination Among Native &
                                                International Students </a></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget categories box">
                            <h4>Popular Category</h4>
                            <div class="category-box">
                                <ul>
                                    <li><a href="#">Civil Engineering</a></li>
                                    <li><a href="#">Online Education</a></li>
                                    <li><a href="#">Artificial Intelligence</a></li>
                                    <li><a href="#">Music learning</a></li>
                                    <li><a href="#">eLearning</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget tags box">
                            <h4>Popular Tags </h4>
                            <div class="tag-list">
                                <ul>
                                    <li><a href="#">Book</a></li>
                                    <li><a href="#">Students </a></li>
                                    <li><a href="#">Education</a></li>
                                    <li><a href="#">eLearning </a></li>
                                    <li><a href="#">Training</a></li>
                                    <li><a href="#">Music </a></li>
                                    <li><a href="#">Courses </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog end -->
@endsection
