@extends('admin.layout.app')

@section('title', 'View Query')
@section('page_title', 'Contact Query')

@section('content')
    <div class="mb-3">
        <a href="{{ route('admin.contact-queries.index') }}" class="btn btn-secondary btn-sm">
            &larr; Back to Queries
        </a>
    </div>

    <div class="card" style="max-width:700px;">
        <div class="card-body">
            <dl class="row mb-0">
                <dt class="col-sm-3 text-muted">Name</dt>
                <dd class="col-sm-9 fw-semibold">{{ $contactQuery->name }}</dd>

                <dt class="col-sm-3 text-muted">Email</dt>
                <dd class="col-sm-9">
                    <a href="mailto:{{ $contactQuery->email }}">{{ $contactQuery->email }}</a>
                </dd>

                <dt class="col-sm-3 text-muted">Phone</dt>
                <dd class="col-sm-9">{{ $contactQuery->phone ?? '—' }}</dd>

                <dt class="col-sm-3 text-muted">Subject</dt>
                <dd class="col-sm-9">{{ $contactQuery->subject ?? '—' }}</dd>

                <dt class="col-sm-3 text-muted">Message</dt>
                <dd class="col-sm-9">
                    <div class="p-3 bg-light rounded" style="white-space:pre-wrap;">{{ $contactQuery->message }}</div>
                </dd>

                <dt class="col-sm-3 text-muted">Received</dt>
                <dd class="col-sm-9 text-muted small">{{ $contactQuery->created_at->format('d M Y, H:i') }}</dd>
            </dl>
        </div>
    </div>
@endsection
