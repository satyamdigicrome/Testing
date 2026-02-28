<nav class="col-md-3 col-lg-2 d-md-block bg-white sidebar border-end min-vh-100">
    <div class="position-sticky pt-3">
        <div class="px-3 mb-3">
            <a href="{{ route('admin.dashboard') }}" class="text-decoration-none fw-bold">CMS Admin</a>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                   href="{{ route('admin.dashboard') }}">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.courses.*') ? 'active' : '' }}"
                   href="{{ route('admin.courses.index') }}">
                    Courses
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.blogs.*') ? 'active' : '' }}"
                   href="{{ route('admin.blogs.index') }}">
                    Blogs
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}"
                   href="{{ route('admin.faqs.index') }}">
                    FAQ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}"
                   href="{{ route('admin.testimonials.index') }}">
                    Testimonials
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.documents.*') ? 'active' : '' }}"
                   href="{{ route('admin.documents.index') }}">
                    Documents
                </a>
            </li>
        </ul>
    </div>
</nav>

