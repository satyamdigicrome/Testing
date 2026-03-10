@extends('admin.layout.app')

@section('title', 'Leads')
@section('page_title', 'Lead Enquiries')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <p class="text-muted mb-0">Total: {{ $leads->total() }} enquir{{ $leads->total() === 1 ? 'y' : 'ies' }}</p>
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
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Source</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($leads as $lead)
                            <tr>
                                <td class="text-muted">{{ $loop->iteration + ($leads->currentPage() - 1) * $leads->perPage() }}</td>
                                <td class="fw-semibold">{{ $lead->name }}</td>
                                <td>{{ $lead->phone }}</td>
                                <td>{{ $lead->email ?? '—' }}</td>
                                <td>
                                    @if($lead->source)
                                        <small class="text-muted" title="{{ $lead->source }}">
                                            {{ Str::limit($lead->source, 60) }}
                                        </small>
                                    @else
                                        <span class="text-muted">—</span>
                                    @endif
                                </td>
                                <td class="text-muted small">{{ $lead->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">No enquiries yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if($leads->hasPages())
        <div class="mt-3 d-flex justify-content-center">
            {{ $leads->links() }}
        </div>
    @endif
@endsection
