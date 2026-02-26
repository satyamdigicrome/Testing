@extends('admin.layout.app')

@section('title', 'FAQ')
@section('page_title', 'FAQ')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <div class="text-muted small">Manage frequently asked questions</div>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary btn-sm">Add Question</a>
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
                    <th>Question</th>
                    <th>Status</th>
                    <th class="text-end">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($faqs as $faq)
                    <tr>
                        <td>{{ $faq->id }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>
                            @if($faq->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-secondary">Inactive</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                            <form method="POST"
                                  action="{{ route('admin.faqs.destroy', $faq) }}"
                                  class="d-inline js-delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">No FAQs found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $faqs->links() }}
    </div>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.js-delete-form').forEach((form) => {
            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const result = await Swal.fire({
                    title: 'Delete question?',
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

