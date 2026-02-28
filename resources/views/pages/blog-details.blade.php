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
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('blogs') }}">All Blogs</a></li>
                            <li>{{ Str::limit($blog->name, 50) }}</li>
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
                <div class="col-xl-8 col-lg-7 col-md-12 col-12">
                    <div class="content-wrapper">
                        <article>
                            <div class="post-content">
                                @if($blog->image)
                                    <div class="post-img">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}">
                                    </div>
                                @elseif($blog->thumbnail)
                                    <div class="post-img">
                                        <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->name }}">
                                    </div>
                                @endif

                                <div class="blog-date mb-3">
                                    <span>{{ $blog->created_at->format('d M Y') }}</span>
                                    @if($blog->author_name)
                                        &nbsp;&bull;&nbsp; By <strong>{{ $blog->author_name }}</strong>
                                    @endif
                                </div>

                                <h2 class="post-subtitle">{{ $blog->name }}</h2>

                                @if($blog->long_description)
                                    <div class="post-body">
                                        {!! $blog->long_description !!}
                                    </div>
                                @elseif($blog->short_description)
                                    <p>{{ $blog->short_description }}</p>
                                @endif
                            </div>
                        </article>

                        {{-- Tags --}}
                        @if($blog->tags)
                            <div class="post-meta-option bg-zircon">
                                <div class="row gx-0 align-items-center">
                                    <div class="col-md-7 col-12">
                                        <div class="post-tag tag-list">
                                            <span>Tags:</span>
                                            <ul>
                                                @foreach(array_map('trim', explode(',', $blog->tags)) as $tag)
                                                    @if($tag)
                                                        <li>
                                                            <a href="{{ route('blogs', ['search' => $tag]) }}">{{ $tag }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-12 text-md-end text-start">
                                        <div class="post-share w-100">
                                            <span>Share:</span>
                                            <ul class="social-profile style2">
                                                <li><a target="_blank" href="https://instagram.com"><i class="lab la-instagram"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com"><i class="lab la-twitter"></i></a></li>
                                                <li><a target="_blank" href="https://facebook.com"><i class="lab la-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Author --}}
                        @if($blog->author_name)
                            <div class="post-author bg-titan">
                                <div class="post-author-img">
                                    @if($blog->author_image)
                                        <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}">
                                    @else
                                        <img src="{{ asset('assets/img/blog/author.jpg') }}" alt="{{ $blog->author_name }}">
                                    @endif
                                </div>
                                <div class="post-author-info">
                                    <h4>{{ $blog->author_name }}</h4>
                                    @if($blog->author_description)
                                        <p>{{ $blog->author_description }}</p>
                                    @endif
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                    <div class="sidebar">
                        {{-- Search --}}
                        <div class="sidebar-widget search-box">
                            <form action="{{ route('blogs') }}" method="GET">
                                <input type="search" name="search" placeholder="Search By Keywords">
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </div>

                        {{-- Recent Posts --}}
                        @if($recentPosts->isNotEmpty())
                            <div class="sidebar-widget recent-post">
                                <h4>Popular Posts</h4>
                                <div class="popular-post-widget">
                                    @foreach($recentPosts as $post)
                                        <div class="pp-post-item">
                                            <div class="pp-post-img">
                                                @if($post->thumbnail)
                                                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="{{ $post->name }}">
                                                @else
                                                    <img src="{{ asset('assets/img/blog/post-thumb-1.jpg') }}" alt="{{ $post->name }}">
                                                @endif
                                            </div>
                                            <div class="pp-post-info">
                                                <span>{{ $post->created_at->format('d M Y') }}</span>
                                                <h6><a href="{{ route('blog.show', $post->slug) }}">{{ Str::limit($post->name, 60) }}</a></h6>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        {{-- Tags --}}
                        @if($allTags->isNotEmpty())
                            <div class="sidebar-widget tags box">
                                <h4>Popular Tags</h4>
                                <div class="tag-list">
                                    <ul>
                                        @foreach($allTags as $tag)
                                            <li>
                                                <a href="{{ route('blogs', ['search' => $tag]) }}">{{ $tag }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Details end -->
@endsection
