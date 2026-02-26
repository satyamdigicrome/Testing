@extends('admin.layout.app')

@section('title', 'Documents')
@section('page_title', 'Documents')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                <tr>
                    <th>Page Type</th>
                    <th>Status</th>
                    <th class="text-end">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($types as $typeValue => $typeLabel)
                    @php $doc = $documents->get($typeValue); @endphp
                    <tr>
                        <td class="fw-medium">{{ $typeLabel }}</td>
                        <td>
                            @if($doc)
                                @if($doc->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            @else
                                <span class="badge bg-light text-dark">Not created</span>
                            @endif
                        </td>
                        <td class="text-end">
                            @if($doc)
                                <a href="{{ route('admin.documents.edit', $doc) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                            @else
                                <a href="{{ route('admin.documents.create', $typeValue) }}" class="btn btn-primary btn-sm">Add</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

