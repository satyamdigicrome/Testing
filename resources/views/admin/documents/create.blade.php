@extends('admin.layout.app')

@section('title', 'Add Document')
@section('page_title', 'Add Document')

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('admin.documents.store') }}">
                @csrf

                @include('admin.documents._form', ['document' => $document, 'types' => $types])

                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <a href="{{ route('admin.documents.index') }}" class="btn btn-outline-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection

