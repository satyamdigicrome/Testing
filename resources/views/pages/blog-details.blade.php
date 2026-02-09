@extends('layout.app')
@section('content')
    <section class="breadcrumb-wrap bg-f br-bg-2">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Blog Details</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->
    <!-- Blog Details start -->
    <div class="post-details pt-100 pb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="content-wrapper">
                        <article>
                            <div class="post-content ">
                                <div class="post-img">
                                    <img src="{{ asset('assets/img/blog/single-post-2.jpg') }}" alt="Image">
                                </div>
                                <h2 class="post-subtitle">Online learning is not the next big thing, it is the now big thing
                                </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <blockquote class="wp-block-quote">
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum. Curabitur pretium tincidunt lacus. Nulla gravida orci a
                                        odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus
                                        magna felis sollicitudin mauris.</p>
                                    <i class="ri-double-quotes-l"></i>
                                </blockquote>
                                <h2 class="post-subtitle">This is an ideal dummy text generator or a Lorem Ipsum tool</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </p>
                                <div class="row gx-4 mt-30 align-items-center">
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/blog/post-1.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="post-img">
                                            <img src="{{ asset('assets/img/blog/post-2.jpg') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas
                                    est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est
                                    notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum
                                    formas humanitatis per seacula quarta decima et quinta decima.</p>
                                <p class="mb-0">Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in
                                    futurum. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium
                                    lectorum eleifend option.</p>
                            </div>
                        </article>
                        <div class="post-meta-option bg-zircon">
                            <div class="row gx-0 align-items-center">
                                <div class="col-md-7 col-12">
                                    <div class="post-tag tag-list">
                                        <span>Tags:</span>
                                        <ul class="">
                                            <li><a href="blog-details-no-sidebar.html#">Education</a></li>
                                            <li><a href="blog-details-no-sidebar.html#">Book</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5 col-12 text-md-end text-start">
                                    <div class="post-share w-100">
                                        <span>Share:</span>
                                        <ul class="social-profile style2">
                                            <li><a target="_blank" href="https://instagram.com"><i
                                                        class="lab la-instagram"></i></a></li>
                                            <li><a target="_blank" href="https://twitter.com"><i
                                                        class="lab la-twitter"></i></a></li>
                                            <li><a target="_blank" href="https://facebook.com"><i
                                                        class="lab la-facebook-f"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-author bg-titan">
                            <div class="post-author-img">
                                <img src="{{ asset('assets/img/blog/author.jpg') }}" alt="Image">
                            </div>
                            <div class="post-author-info">
                                <h4>Jonathan Miller</h4>
                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi ullam ea molestias
                                    accusamus explicabo qui incidunt voluptatem corporis, blanditiis odio.</p>
                                <ul class="social-profile v3 mt-2">
                                    <li><a target="_blank" href="https://instagram.com"><i class="lab la-instagram"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://twitter.com"><i class="lab la-twitter"></i></a>
                                    </li>
                                    <li><a target="_blank" href="https://facebook.com"><i class="lab la-facebook-f"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comment-wrap style2">
                            <h4 class="comment-title">3 Comments</h4>
                            <div class="comment-item">
                                <div class="comment-author_img">
                                    <img src="{{ asset('assets/img/team/team-member-6.jpg') }}" alt="Image">
                                </div>
                                <div class="comment-author_text">
                                    <div class="comment-author_info">
                                        <h6>Mira Brox</h6>
                                        <p>15 Feb,
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script> AT 02:00 PM
                                        </p>
                                    </div>
                                    <p>The user can create dummy content in words list items and proposals. Depending on
                                        your a user can fit any of these formats in their project, which adds a lot of
                                        conveniences.</p>
                                    <a href="blog-details-no-sidebar.html#" class="post-reply">Reply</a>
                                </div>
                            </div>
                            <div class="comment-item reply">
                                <div class="comment-author_img">
                                    <img src="{{ asset('assets/img/team/team-member-4.jpg') }}" alt="Image">
                                </div>
                                <div class="comment-author_text">
                                    <div class="comment-author_info">
                                        <h6>Andrea F. Kelley</h6>
                                        <p>7:00 PM, 21 January,
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script>
                                        </p>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                                        eos et accusam et justo duo dolores et ea rebum.</p>
                                </div>
                            </div>
                            <div class="comment-item">
                                <div class="comment-author_img">
                                    <img src="{{ asset('assets/img/team/team-member-2.jpg') }}" alt="Image">
                                </div>
                                <div class="comment-author_text">
                                    <div class="comment-author_info">
                                        <h6>Torry Carl </h6>
                                        <p>15 Feb,
                                            <script src="{{ asset('assets/js/fslightbox.js') }}"></script> AT 02:00 PM
                                        </p>
                                    </div>
                                    <p>The user can create dummy content in words list items and proposals. Depending on
                                        your a user can fit any of these formats in their project, which adds a lot of
                                        conveniences.</p>
                                    <a href="blog-details-no-sidebar.html#" class="post-reply">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-form-wrap">
                            <div class="comment-form-title style2">
                                <h4>Feel Free To leave A reply</h4>
                                <p>Your email address will not be published. Required fields are marked*
                                </p>
                            </div>
                            <form action="blog-details-no-sidebar.html#" class="comment-form style2">
                                <div class="row gx-3">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Your Name*</label>
                                            <input type="text" name="name" id="name"
                                                placeholder="Your  Full Name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Your Email Address*</label>
                                            <input type="email" name="email" id="email"
                                                placeholder="Email Address*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="msg">Enter Your Comment</label>
                                            <textarea name="msg" id="msg" cols="30" rows="10" placeholder="Your comments..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn v1 d-block w-100">Post A Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
