@extends('admin.layout.app')

@section('title', 'Contact Queries')
@section('page_title', 'Contact Queries')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="text-muted mb-0">Total: {{ $queries->total() }} {{ Str::plural('query', $queries->total()) }}</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Date</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($queries as $query)
                            <tr class="{{ !$query->is_read ? 'table-warning' : '' }}">
                                <td class="text-muted">
                                    {{ $loop->iteration + ($queries->currentPage() - 1) * $queries->perPage() }}
                                    @if(!$query->is_read)
                                        <span class="badge bg-danger ms-1" style="font-size:0.65rem;">New</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $query->name }}</td>
                                <td><a href="mailto:{{ $query->email }}">{{ $query->email }}</a></td>
                                <td>{{ $query->phone ?? '—' }}</td>
                                <td>{{ $query->subject ? Str::limit($query->subject, 40) : '—' }}</td>
                                <td class="text-muted small">{{ $query->created_at->format('d M Y, H:i') }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.contact-queries.show', $query) }}"
                                       class="btn btn-outline-primary btn-sm">View</a>
                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                            data-id="{{ $query->id }}"
                                            data-name="{{ $query->name }}"
                                            onclick="confirmDelete(this)">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">No contact queries yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if($queries->hasPages())
        <div class="mt-3 d-flex justify-content-center">
            {{ $queries->links() }}
        </div>
    @endif

    {{-- Delete Form --}}
    <form id="deleteForm" method="POST" style="display:none;">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(btn) {
    var id   = btn.getAttribute('data-id');
    var name = btn.getAttribute('data-name');
    Swal.fire({
        title: 'Delete query from "' + name + '"?',
        text: 'This action cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete',
    }).then(function(result) {
        if (result.isConfirmed) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route("admin.contact-queries.destroy", ":id") }}'.replace(':id', id);
            form.submit();
        }
    });
}
</script>
@endpush
