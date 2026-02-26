<div class="d-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h4 mb-0">@yield('page_title', 'Admin')</h1>
    </div>
    <div class="d-flex align-items-center gap-2">
        <div class="text-muted small">
            {{ auth()->user()->name ?? 'Admin' }}
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary btn-sm">Logout</button>
        </form>
    </div>
</div>

