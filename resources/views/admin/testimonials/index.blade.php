@extends('admin.layout.app')

@section('title', 'Testimonials')
@section('page_title', 'Testimonials')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="text-muted small">Manage testimonials shown on the website</div>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary btn-sm">
            + Add Testimonial
        </a>
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
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Rating</th>
                        <th>Testimonial</th>
                        <th>Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->id }}</td>
                            <td>
                                @if ($testimonial->image)
                                    <img src="{{ asset('storage/' . $testimonial->image) }}"
                                         alt="{{ $testimonial->name }}"
                                         class="rounded-circle"
                                         style="width:44px;height:44px;object-fit:cover;">
                                @else
                                    <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white fw-bold"
                                         style="width:44px;height:44px;font-size:16px;">
                                        {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                    </div>
                                @endif
                            </td>
                            <td class="fw-medium">{{ $testimonial->name }}</td>
                            <td>
                                <span class="text-warning">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="ri-star-fill"></i>
                                        @else
                                            <i class="ri-star-line"></i>
                                        @endif
                                    @endfor
                                </span>
                                <small class="text-muted ms-1">{{ $testimonial->rating }}/5</small>
                            </td>
                            <td class="text-muted" style="max-width:280px;">
                                {{ Str::limit($testimonial->text, 80) }}
                            </td>
                            <td>
                                @if ($testimonial->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.testimonials.edit', $testimonial) }}"
                                   class="btn btn-outline-primary btn-sm">Edit</a>
                                <form method="POST"
                                      action="{{ route('admin.testimonials.destroy', $testimonial) }}"
                                      class="d-inline js-delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">
                                No testimonials found. <a href="{{ route('admin.testimonials.create') }}">Add one</a>.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $testimonials->links() }}
    </div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
@endpush

@push('scripts')
<script>
    document.querySelectorAll('.js-delete-form').forEach((form) => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const result = await Swal.fire({
                title: 'Delete testimonial?',
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
