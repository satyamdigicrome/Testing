@extends('admin.layout.app')

@section('title', 'Team Members')
@section('page_title', 'Team Members')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="text-muted mb-0">Total: {{ $members->total() }} member{{ $members->total() === 1 ? '' : 's' }}</p>
        <a href="{{ route('admin.team-members.create') }}" class="btn btn-primary btn-sm">+ Add Member</a>
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
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Order</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($members as $member)
                            <tr>
                                <td class="text-muted">{{ $loop->iteration + ($members->currentPage() - 1) * $members->perPage() }}</td>
                                <td>
                                    @if($member->image)
                                        <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}"
                                             style="width:48px;height:48px;object-fit:cover;border-radius:50%;border:2px solid #dee2e6;">
                                    @else
                                        <div style="width:48px;height:48px;border-radius:50%;background:#6c757d;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:600;font-size:1.1rem;">
                                            {{ strtoupper(substr($member->name, 0, 1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $member->name }}</td>
                                <td class="text-muted">{{ $member->position ?? '—' }}</td>
                                <td>{{ $member->order }}</td>
                                <td>
                                    @if($member->status)
                                        <span class="badge bg-success">Published</span>
                                    @else
                                        <span class="badge bg-secondary">Draft</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('admin.team-members.edit', $member) }}"
                                       class="btn btn-outline-primary btn-sm">Edit</a>
                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                            data-id="{{ $member->id }}"
                                            data-name="{{ $member->name }}"
                                            onclick="confirmDelete(this)">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">No team members yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if($members->hasPages())
        <div class="mt-3 d-flex justify-content-center">
            {{ $members->links() }}
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
        title: 'Delete "' + name + '"?',
        text: 'This action cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#dc3545',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Yes, delete',
    }).then(function(result) {
        if (result.isConfirmed) {
            var form = document.getElementById('deleteForm');
            form.action = '{{ route("admin.team-members.destroy", ":id") }}'.replace(':id', id);
            form.submit();
        }
    });
}
</script>
@endpush
