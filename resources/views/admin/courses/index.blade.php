@extends('admin.layout.app')

@section('title', 'Courses')
@section('page_title', 'Courses')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="text-muted small">Manage your courses</div>
        <a href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-sm">Add Course</a>
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
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->id }}</td>
                            <td class="fw-medium">{{ $course->title }}</td>
                            <td class="text-muted">{{ $course->slug }}</td>
                            <td>
                                @if ($course->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-outline-primary btn-sm">Edit</a>

                                <form method="POST"
                                      action="{{ route('admin.courses.destroy', $course) }}"
                                      class="d-inline js-delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-4">No courses found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $courses->links() }}
    </div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('.js-delete-form').forEach((form) => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const result = await Swal.fire({
                title: 'Delete course?',
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

