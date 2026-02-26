@extends('admin.layout.app')

@section('title', 'Blogs')
@section('page_title', 'Blogs')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="text-muted small">Manage blog posts</div>
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-sm">Add Blog</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td class="fw-medium">{{ $blog->name }}</td>
                            <td class="text-muted">{{ $blog->slug }}</td>
                            <td>
                                @if ($blog->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-outline-primary btn-sm">Edit</a>

                                <form method="POST"
                                      action="{{ route('admin.blogs.destroy', $blog) }}"
                                      class="d-inline js-delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No blog posts found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $blogs->links() }}
    </div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.js-delete-form').forEach((form) => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const result = await Swal.fire({
                title: 'Delete blog?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it',
            });
            if (result.isConfirmed) form.submit();
        });
    });
</script>
@endpush

