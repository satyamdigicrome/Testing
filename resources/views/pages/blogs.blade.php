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
                    @if($blogs->isNotEmpty())
                        <div class="row justify-content-md-center">
                            @foreach($blogs as $blog)
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="blog-card style2">
                                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog-img">
                                            @if($blog->thumbnail)
                                                <img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="{{ $blog->name }}">
                                            @else
                                                <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="{{ $blog->name }}">
                                            @endif
                                        </a>
                                        <div class="blog-info">
                                            <div class="blog-date">
                                                <h6>
                                                    <span>{{ $blog->created_at->format('d') }}</span>{{ $blog->created_at->format('M Y') }}
                                                </h6>
                                            </div>
                                            <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->name }}</a></h3>
                                            @if($blog->short_description)
                                                <p>{{ Str::limit($blog->short_description, 100) }}</p>
                                            @endif
                                            <div class="blog-author-wrap">
                                                @if($blog->author_name)
                                                    <div class="blog-author">
                                                        <div class="blog-author-img">
                                                            @if($blog->author_image)
                                                                <img src="{{ asset('storage/' . $blog->author_image) }}" alt="{{ $blog->author_name }}">
                                                            @else
                                                                <img src="{{ asset('assets/img/blog/author-1.jpg') }}" alt="{{ $blog->author_name }}">
                                                            @endif
                                                        </div>
                                                        <div class="blog-author-name">
                                                            <p>By <a href="#">{{ $blog->author_name }}</a></p>
                                                        </div>
                                                    </div>
                                                @endif
                                                <a href="{{ route('blog.show', $blog->slug) }}" class="read-more">
                                                    <i class="las la-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Pagination --}}
                        @if($blogs->hasPages())
                            <div class="page-navigation">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="page-nav">
                                            @if($blogs->onFirstPage())
                                                <li><span><i class="ri-arrow-left-s-line"></i></span></li>
                                            @else
                                                <li><a href="{{ $blogs->previousPageUrl() }}"><i class="ri-arrow-left-s-line"></i></a></li>
                                            @endif

                                            @foreach($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                                <li>
                                                    <a class="{{ $page == $blogs->currentPage() ? 'active' : '' }}" href="{{ $url }}">{{ $page }}</a>
                                                </li>
                                            @endforeach

                                            @if($blogs->hasMorePages())
                                                <li><a href="{{ $blogs->nextPageUrl() }}"><i class="ri-arrow-right-s-line"></i></a></li>
                                            @else
                                                <li><span><i class="ri-arrow-right-s-line"></i></span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                        <div class="text-center py-5">
                            <p>No blogs found{{ request('search') ? ' for "' . e(request('search')) . '"' : '' }}.</p>
                        </div>
                    @endif
                </div>

                {{-- Sidebar --}}
                <div class="col-xl-4 col-lg-5 col-md-12 col-12">
                    <div class="sidebar">
                        {{-- Search --}}
                        <div class="sidebar-widget search-box">
                            <form action="{{ route('blogs') }}" method="GET">
                                <input type="search" name="search" placeholder="Search By Keywords"
                                       value="{{ request('search') }}">
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
    <!-- Blog end -->
@endsection
